<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function SuperAdminDashboard()
    {
        $users = User::with('postal_code_localite', 'image' )->paginate(10);

        //dd($users[0]->postal_code_localite->localite);

        return view('dashboard.superAdmin', compact('users'));
    }

    public function AdminDashboard()
    {
        return view('dashboard.admin');
    }

    public function BabysitterDashboard()
    {
        return view('dashboard.babysitter');
    }

    public function ParentDashboard()
    {
        return view('dashboard.parent');
    }
}
