<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Custody_criteria;
use App\Models\Question;
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

        $users = User::with('postal_code_localite', 'image' )->paginate(10);
        $activities = Activity::with('activity_parent', 'babysitterUser')->paginate(10);
        $criterias = Custody_criteria::all();

        return view('dashboard.admin', compact('users', 'activities', 'criterias'));
    }

    public function BabysitterDashboard($id)
    {
        return view('dashboard.babysitter');
    }

    public function ParentDashboard($id)
    {
        return view('dashboard.parent');
    }

    public function AjaxListUsers()
    {
        $users = User::with(  'parentUser' )->get();

        return response()->json($users);
    }

    public function AjaxListActivities()
    {
        $activities = Activity::with('activity_parent', 'babysitterUser')->get();

        return response()->json($activities);
    }

    public function AjaxListCriterias()
    {
        $criterias = Custody_criteria::all();

        return response()->json($criterias);
    }

    public function AjaxListForum()
    {
        $forum = Question::with('responseForum')->get();

        return response()->json($forum);
    }

}
