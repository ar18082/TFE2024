<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Activity_parent;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::with('activity_parent')->get();
        $nbr = 0;


        return view('activity.index', compact('activities', 'nbr'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $activity = new Activity();

        return view('activity.form', compact('activity'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'nbr_children' => 'required',
            'price' => 'required',
            'date_activity' => 'required',
            'visible_start' => 'required',
            'visible_end' => 'required',


        ]);

        $activity = new Activity();
        $activity->babysitter_user_id = 3;
        $activity->title = $validatedData['title'];
        $activity->description = $validatedData['description'];
        $activity->price = $validatedData['price'];
        $activity->nbr_children = $validatedData['nbr_children'];
        $activity->date_activity = $validatedData['date_activity'];
        $activity->visible_start = $validatedData['visible_start'];
        $activity->visible_end = $validatedData['visible_end'];
        $activity->save();

        return redirect()->route('activity.index')->with('success', 'Activity created successfully.');
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
        $activity = Activity::find($id);


        return view('activity.form', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'nbr_children' => 'required',
            'price' => 'required',
            'date_activity' => 'required',
            'visible_start' => 'required',
            'visible_end' => 'required',


        ]);

        $activity = Activity::find($id);
        $activity->babysitter_user_id = 3;
        $activity->title = $validatedData['title'];
        $activity->description = $validatedData['description'];
        $activity->price = $validatedData['price'];
        $activity->nbr_children = $validatedData['nbr_children'];
        $activity->date_activity = $validatedData['date_activity'];
        $activity->visible_start = $validatedData['visible_start'];
        $activity->visible_end = $validatedData['visible_end'];
        $activity->save();

        return redirect()->route('activity.index')->with('success', 'Activity updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Activity::find($id);
        $activity->delete();

        return redirect()->route('activity.index')->with('success', 'Activity deleted successfully.');
    }

    public function activityParent(Request $request)
    {
        $activity = Activity::find($request->activity_id);
        $activity_parent = Activity_parent::where('activity_id', $request->activity_id)->get('nbr_children');

        $nbr_children = 0;
        foreach ($activity_parent as $nbr_child) {
            $nbr_children += $nbr_child->nbr_children;
        }

        if($activity->nbr_children == $nbr_children){
            return redirect()->route('activity.index')->with('error', 'Activity is full.');
        }elseif($activity->nbr_children >= $request->nbr_children + $nbr_children){

            $activity_parent = new Activity_parent();
            $activity_parent->activity_id = $request->activity_id;
            $activity_parent->parent_user_id = 3;
            $activity_parent->nbr_children = $request->nbr_children;
            $activity_parent->save();
            return redirect()->route('activity.index')->with('success', 'Activity inscription successfully.');
        }else{

            return redirect()->route('activity.index')->with('error', 'pas suffisament de place. Il reste '.$activity->nbr_children - $nbr_children.' places.');
        }






    }



}
