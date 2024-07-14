<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }


    public function index()
    {
        /*$user = new User([
           'name' => 'ariz',
           'email' => 'antonino.rizzo@isl-edu.be',
           'password' => bcrypt('I8VT6tCjQwXuJHTiHarB'), // Assurez-vous de crypter le mot de passe
       ]);
       $user->save();*/
        return view('home.index');
    }
}
