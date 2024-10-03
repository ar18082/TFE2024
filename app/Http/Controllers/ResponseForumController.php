<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Response;
use Illuminate\Http\Request;
use App\Notifications\NewResponseNotification;

class ResponseForumController extends Controller
{

    public function store(Request $request, Question $question)
    {
        $request->validate([
            'body' => 'required'
        ]);

       $response = Response::create([
            'content' => $request->body,
            'question_id' => $question->id,
            'user_id' => auth()->id()
        ]);

        if ($question->user->id !== auth()->id()) {
            $question->user->notify(new NewResponseNotification($response));
        }

        // Notifier les autres participants (ceux qui ont déjà répondu)
        $participants = $question->replies()->with('user')->get()->pluck('user')->unique();
        foreach ($participants as $participant) {
            if ($participant->id !== auth()->id()) {
                $participant->notify(new NewResponseNotification($response));
            }
        }

        return redirect()->route('forum.show', $question->id);
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
}
