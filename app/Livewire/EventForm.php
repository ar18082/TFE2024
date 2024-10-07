<?php

namespace App\Livewire;

use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EventForm extends Component
{
//    public $title;
//    public $start;
//    public $end;
//    public $emplacement;
//    public $time_start;
//    public $time_end;
//    public $user_id;
//
//    protected $rules = [
//        'title' => 'required|string|max:255',
//        'start' => 'required|date',
//        'end' => 'required|date',
//        'emplacement' => 'required|string',
//        'time_start' => 'required',
//        'time_end' => 'required',
//    ];
//
//    public function submit()
//    {
//        $this->validate();
//
//        session()->put([
//            'title' => $this->title,
//            'start' => $this->start,
//            'end' => $this->end,
//            'time_start' => $this->time_start,
//            'time_end' => $this->time_end,
//            'emplacement' => $this->emplacement,
//            'user_id' => 2,
//        ]);
//
//
//
//        return redirect()->route('event.store');
//
//
//
//
//    }

//    public function create()
//    {
//        Event::create([
//            'title' => $this->title,
//            'start' => $this->start,
//            'end' => $this->end,
//            'time_start' => $this->time_start,
//            'time_end' => $this->time_end,
//            'emplacement' => $this->emplacement,
//            'user_id' => 2,
//        ]);
//
//        session()->flash('message', 'Evènement créé avec succès.');
//
//        $this->reset();
//    }
//
//    public function edit($id)
//    {
//        $event = Event::find($id);
//
//        $this->title = $event->title;
//        $this->start = $event->start;
//        $this->end = $event->end;
//        $this->time_start = $event->time_start;
//        $this->time_end = $event->time_end;
//        $this->emplacement = $event->emplacement;
//
//        session()->flash('message', 'Evènement modifié avec succès.');
//
//        $this->reset();
//    }


//    public function render()
//    {
//        return view('livewire.event-form');
//    }





}
