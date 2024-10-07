<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\BabysitterCustody;
use App\Models\Comment;
use App\Models\Custody_criteria;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function AdminDashboard()
    {

        $users = User::with('postal_code_localite', 'image' )->paginate(10);
        $activities = Activity::with('activity_parent', 'babysitterUser')->paginate(10);
        $criterias = Custody_criteria::all();
        $forum = Question::with('responses', 'category')->get();

        return view('dashboard.admin', compact('users', 'activities', 'criterias', 'forum'));
    }

    public function BabysitterDashboard($id)
    {
        $userId = intval($id);
        $user = User::where('id', $userId)
            ->with([
                'postal_code_localite',
                'custodyCriteria',
                'goodPlan',
                'response',
                'image'])
            ->first();
        $activities = Activity::where('babysitter_user_id', $user->babysitter_user_id)->with('activity_parent')->get();
        $comments = Comment::where('babysitter_user_id', $user->babysitter_user_id)->with('parentUser')->get();

        return view('dashboard.babysitter', compact('user', 'activities', 'comments'));
    }

    public function ParentDashboard($id)
    {
        $userId = intval($id);

        $user = User::where('id', $userId)->with('parentUser.children', 'parentUser.activity', 'parentUser.comments', 'parentUser.favorites', 'postal_code_localite', 'custodyCriteria', 'goodPlan', 'response', 'question.category', 'image' )->first();

        return view('dashboard.parent', compact('user'));
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
        $criterias = BabysitterCustody::with('users', 'CustodyCriteria')->get();

        return response()->json($criterias);
    }

    public function AjaxListForum()
    {
        $forum = Question::with('responses', 'category')->get();

        return response()->json($forum);
    }

    public function AjaxUserComments($id)
    {
        $comments = Comment::where('id', $id)->with('parentUser')->get();

        return response()->json($comments);
    }

}
