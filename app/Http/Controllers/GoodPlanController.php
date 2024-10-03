<?php

namespace App\Http\Controllers;

use App\Models\GoodPlan;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;

class GoodPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $date = date('Y-m-d');

        $goodPlans = GoodPlan::where('date_end', '>=', $date)
            ->where('date_start', '<=', $date)
            ->with('images')
            ->orderBy('date_start', 'asc')
            ->get();



        return view('goodPlan.index' , compact('goodPlans', 'date'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('goodPlan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
        ]);

        $user = User::find(1);

        $goodPlan = new GoodPlan();
        $goodPlan->title = $request->title;
        $goodPlan->description = $request->description;
        $goodPlan->date_start = $request->startDate;
        $goodPlan->date_end = $request->endDate;
        $goodPlan->user_id = $user->id;
        $goodPlan->save();

        if($request->files->has('image')) {
            $file = $request->file('image');
            $fileName = 'storage/goodPlan/' . $user->id .'.' . $file->getClientOriginalExtension();
            $file->move(storage_path('goodPlan'), $fileName);

            $image = new Image();
            $image->url = $fileName;
            $image->good_plan_id = $goodPlan->id;
            $image->user_id = $user->id;
            $image->type = 'good_plan';
            $image->save();

        }

        return redirect()->route('goodPlan.index')->with('success', 'Good Plan created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $goodPlan = GoodPlan::find($id);
        return view('goodPlan.form', compact('goodPlan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
        ]);

        $goodPlan = GoodPlan::find($id);
        $goodPlan->title = $request->title;
        $goodPlan->description = $request->description;
        $goodPlan->date_start = $request->startDate;
        $goodPlan->date_end = $request->endDate;
        $goodPlan->save();

        if($request->files->has('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $fileName);

            $images = Image::where('good_plan_id', $goodPlan->id)->get();
            $images->delete();

            $image = new Image();
            $image->url = $fileName;
            $image->good_plan_id = $goodPlan->id;
            $image->user_id = $goodPlan->user_id;
            $image->save();

        }

        return redirect()->route('goodPlan.index')->with('success', 'Good Plan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $goodPlan = GoodPlan::find($id);
        $goodPlan->delete();

        $images = Image::where('good_plan_id', $goodPlan->id)->get();
        $images->delete();


        return redirect()->route('goodPlan.index')->with('success', 'Good Plan deleted successfully');
    }
}
