<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //$user = auth()->user();
        $user = User::find(1)->with('image', 'postal_code_localite', 'babysitterUser', 'parentUser', 'goodPlan', )->first();

//        dd($user);
        return view('user.index' , compact('user'));
    }

    public function show(string $id){
        $user = User::find($id);
        return view('user.show', compact('user'));
    }

    public function edit(string $id){
        $user = User::find($id)->with('image', 'postal_code_localite', 'babysitterUser', 'parentUser', 'goodPlan', )->first();
        return view('user.form', compact('user'));
    }

    public function update(Request $request, string $id){
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('user.index')->with('success', 'Votre profil a été mis à jour');
    }

    public function ajaxUpdateUser(Request $request)
    {
        //take the data send with axios
        $data = $request->all();

        $id = intval($data['user_id']);
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phoneNumber'];
        $addressStreet = $data['addressStreet'];
        $addressNumber = $data['addressNumber'];
        $price = $data['price'];
        $postal_code_localite = $data['postal_code_localite'];
        $description = $data['description'];


        $user = User::find($id);

        $user->name = $name;
        $user->email = $email;
        $user->phone = $phone;
        $user->addressStreet = $addressStreet;
        $user->addressNumber = $addressNumber;
        $user->price = $price;
        $user->postal_code_localite_id = $postal_code_localite;
        $user->description = $description;

        dd($user);
//        $user->save();

        return response()->json(['success' => 'Votre profil a été mis à jour'], 200);

    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('home')->with('error', 'votre compte a été supprimé');
    }
}
