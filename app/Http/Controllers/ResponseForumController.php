<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Response;
use Illuminate\Http\Request;

class ResponseForumController extends Controller
{

    public function store(Request $request, Question $question)
    {
        $request->validate([
            'body' => 'required'
        ]);

       Response::create([
            'content' => $request->body,
            'question_id' => $question->id,
            'user_id' => auth()->id()
        ]);

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
