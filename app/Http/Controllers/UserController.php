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
}
