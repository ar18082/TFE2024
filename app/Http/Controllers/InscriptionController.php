<?php

namespace App\Http\Controllers;

use App\Models\BabysitterCustody;
use App\Models\BabysitterUser;
use App\Models\Children;
use App\Models\Custody_criteria;
use App\Models\Geographic_coodinate;
use App\Models\Image;
use App\Models\ParentUser;
use App\Models\User;
use Illuminate\Http\Request;


class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $id = intval($request->query('user'));
        $user = User::where('id', $id)->with('postal_code_localite', 'goodPlan', 'question', 'response', 'image')->first();


        return view('inscription.index', compact('user') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


      $request->validate([
            'role' => 'required',
            'files' => 'required',
            'phoneNumber' => 'required',
            'addressStreet' => 'required',
            'postal_code_localite' => 'required',


      ],[
            'role' => 'Veuillez choisir un role',
            'files' => 'Veuillez choisir une image',
            'phoneNumber' => 'Veuillez entrer un numéro de téléphone',
            'addressStreet' => 'Veuillez entrer une rue',
            'postal_code_localite' => 'Veuillez entrer un code postal',

      ]);



        if($request->role == 'babysitter'){
            $request->validate([
                'price' => 'required',
                'custody_criterias' => 'required',

            ]);

            $babysitter = new BabysitterUser();
            $babysitter->price = $request->price;
            $babysitter->description = $request->description.$request->role;
            $babysitter->social_network = $request->social_network;
            $babysitter->save();





        }elseif ($request->role == 'parent'){
            $request->validate([
                'children' => 'required',
            ]);
            $parent = new ParentUser();
            $parent->children = $request->children;
            $parent->description = $request->description.$request->role;
            $parent->save();

            for($i = 0; $i < $request->children; $i++){
                $child = new Children();
                $child->parentUser_id = $parent->id;
                $child->name = $request->child_name_.$i;
                $child->firstname = $request->child_firstname_.$i;
                $child->Date_of_birth = $request->child_birth_.$i;
                $child->save();
            }

        }


        $user = User::where('id', $request->user_id)->with('postal_code_localite', 'geographic_coodinates')->first();
        $user->role = [$request->role];
        $user->phoneNumber = $request->phoneNumber;
        $user->addressStreet = $request->addressStreet;
        $user->addressNumber = $request->addressNumber;
        $user->postal_code_localite_id = $request->postal_code_localite;
        $user->save();

        //appelle à la fonction pour la géolocalisation


        // check if the client has latitude and longitude for marker on the map
        if ($user->geographic_coodinates == null) {

            $address = $user->addressStreet. ' '. $user->addressNumber . ', ' . $user->postal_code_localite['postCode'] . ' ' . $user->postal_code_localite['localite'] . ',Bel';

            $coordinates = geocodeAddress($address);

            // Clé API Google Maps Geocoding

            if ($coordinates) {
                $datasGeoCoordinates = new Geographic_coodinate();
                $datasGeoCoordinates->latitude = $coordinates['latitude'];
                $datasGeoCoordinates->longitude = $coordinates['longitude'];
                $datasGeoCoordinates->user_id = $user->id;
                $datasGeoCoordinates->save();

            }
        }

        if($request->role == 'babysitter'){
            foreach ($request->custody_criterias as $custody){

                $criteria = new BabysitterCustody();
                $criteria->User_id = $user->id;
                $criteria->criteria_id = intval($custody);
                $criteria->save();
            }
        }


        // traitement du fichier
        $file = $request->file('files');

        $fileName = 'storage/images/'.$user->id.'.'.$file[0]->getClientOriginalExtension();
        $file[0]->move(public_path('uploads'), $fileName);
        $image = new Image();
        $image->url = $fileName;
        $image->user_id = $user->id;
        $image->type = 'profil';
        $image->save();


        return redirect()->route('home')->with('success', 'Votre inscription est complete');


    }

    public function attenteConfirmation($id)
    {

        $user = User::find($id);



        return redirect()->route('home')->with('user', $user);
    }

//    public function confirmation()
//    {
//        $user = User::find($id);
//        $user->email_verified_at = now();
//        $user->save();
//
//        return redirect()->route('home')->with('success', 'Votre inscription est confirmée');
//    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
