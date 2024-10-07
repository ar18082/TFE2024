<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();

        return view('event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$event = new Event();

        return view('event.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'start' => 'required|date',
            'end' => 'required|date',
            'time_start' => 'required',
            'time_end' => 'required',
            'emplacement' => 'required|string',

        ], [
            'title.required' => 'Le titre est obligatoire.',
            'start.required' => 'La date de début est obligatoire.',
            'end.required' => 'La date de fin est obligatoire.',
            'time_start.required' => 'L\'heure de début est obligatoire.',
            'time_end.required' => 'L\'heure de fin est obligatoire.',
            'emplacement.required' => 'L\'emplacement est obligatoire.',

        ]);

        $title = $request->input('title');
        $start = $request->input('start');
        $end = $request->input('end');
        $time_start = $request->input('time_start');
        $time_end = $request->input('time_end');
        $emplacement = $request->input('emplacement');
        $user_id = $request->input('user_id');

        // add in start date the time
        $start = Carbon::parse($start . ' ' . $time_start);
        $end = Carbon::parse($end . ' ' . $time_end);


        $event = new Event();
        $event->title = $title;
        $event->start = $start;
        $event->end = $end;
        $event->time_start = $time_start;
        $event->time_end = $time_end;
        $event->emplacement = $emplacement;
        $event->user_id = 2;
        $event->save();

        return redirect()->back()->with('success', 'Evenement créé avec succès.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function ajaxListEvents()
    {
        $events = Event::where('user_id', 2)->get();

        return response()->json($events);
    }
}
