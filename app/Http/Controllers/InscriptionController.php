<?php

namespace App\Http\Controllers;

use App\Models\BabysitterCustody;
use App\Models\BabysitterUser;
use App\Models\Children;
use App\Models\Custody_criteria;
use App\Models\Image;
use App\Models\ParentUser;
use Illuminate\Http\Request;


class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        dd($request);
        $userId = $request->query("id");
        dd($request);

        return view('inscription.index' );
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
        dd($request->all());

        $request->validate([
            'role' => 'required',
            'files' => 'required',
            'phoneNumber' => 'required',
            'addressStreet' => 'required',
            'postal_code_localite' => 'required',
            'desciption'.$request->role => 'required',

        ]);

        if($request->role == 'babysitter'){
            $request->validate([
                'price' => 'required',

            ]);

            $babysitter = new BabysitterUser();
            $babysitter->price = $request->price;
            $babysitter->description = $request->description.$request->role;
            $babysitter->social_network = $request->social_network;
            //$babysitter->save();

            foreach ($request->custodies as $custody){
                $custody = new BabysitterCustody();
                $custody->babysitterUser_id = $babysitter->id;
                $custody->custody_criterias_id = $custody->id;
                //$custody->save();
            }



        }elseif ($request->role == 'parent'){
            $request->validate([
                'children' => 'required',
            ]);
            $parent = new ParentUser();
            $parent->children = $request->children;
            $parent->description = $request->description.$request->role;
            //$parent->save();

            for($i = 0; $i < $request->children; $i++){
                $child = new Children();
                $child->parentUser_id = $parent->id;
                $child->name = $request->child_name_.$i;
                $child->firstname = $request->child_firstname_.$i;
                $child->Date_of_birth = $request->child_birth_.$i;
                //$child->save();
            }

        }


        $user = auth()->user();
        $user->role = $request->role;
        $user->phoneNumber = $request->phoneNumber;
        $user->addressStreet = $request->addressStreet;
        $yser->addressNumber = $request->addressNumber;
        $user->postal_code_localite = $request->postal_code_localite;
        $user->description = $request->description.$request->role;
        //$user->save();

        // traitement du fichier
        $file = $request->file('files');
        $fileName = 'storage/images/'.$user->id.'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $fileName);
        $image = new Image();
        $image->url = $fileName;
        $image->user_id = $user->id;
        $image->type = 'profil';
        //$image->save();





    }

    public function attenteConfirmation()
    {
        return view('inscription.attenteConfirmation');
    }

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
