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

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('home')->with('error', 'votre compte a été supprimé');
    }
}
