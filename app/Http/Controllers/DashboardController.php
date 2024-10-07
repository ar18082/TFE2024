<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Activity_parent;
use App\Models\BabysitterCustody;
use App\Models\Children;
use App\Models\Comment;
use App\Models\Custody_criteria;
use App\Models\Event;
use App\Models\Favorites;
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
        $children = [];
        $userId = intval($id);
        $user = User::where('id', $userId)
            ->with([
                'postal_code_localite',
                'custodyCriteria',
                'goodPlan',
                'response',
                'image'])
            ->first();
        if($user->parent_user_id != null){
            $children = Children::where('parentUser_id', $user->parent_user_id)->get();
        }
        $questions = Question::where('user_id', $user->id)->with('category', 'responses')->get();
        $activities = Activity::where('babysitter_user_id', $user->babysitter_user_id)->with('activity_parent')->get();
        $comments = Comment::where('babysitter_user_id', $user->babysitter_user_id)->with('parentUser')->get();
        $events = Event::where('user_id', $user->id)->get();
        $favorites = Favorites::where('babysitterUser_id', $user->babysitter_user_id)->with('parentUser')->get();

        return view('dashboard.babysitter', compact('user', 'activities', 'comments', 'events', 'questions', 'children', 'favorites'));
    }

    public function ParentDashboard($id)
    {
        $children = [];
        $userId = intval($id);
        $user = User::where('id', $userId)
            ->with([
                'postal_code_localite',
                'goodPlan',
                'response',
                'image'])
            ->first();

        $children = Children::where('parentUser_id', $user->parent_user_id)->get();
        $questions = Question::where('user_id', $user->id)->with('category', 'responses')->get();
        $activities = Activity_parent::where('parent_user_id', $user->parent_user_id)->with('activity')->get();
        $comments = Comment::where('parent_user_id', $user->parent_user_id)->with('babysitterUser')->get();
        $events = Event::where('user_id', $user->id)->get();
        $favorites = Favorites::where('parentUser_id', $user->parent_user_id)->with('babysitterUser')->get();

        return view('dashboard.parent', compact('user', 'activities', 'comments', 'events', 'questions', 'children', 'favorites'));
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
