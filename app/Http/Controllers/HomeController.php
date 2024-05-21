<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        /*$user = new User([
             'name' => 'ariz',
             'email' => 'ariz@esi-informatique.com',
             'password' => bcrypt('I8VT6tCjQwXuJHTiHarB'), // Assurez-vous de crypter le mot de passe
         ]);
         $user->save();*/



        return view('home.index');
    }
}
