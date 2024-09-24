<?php

namespace App\Http\Controllers;

use App\Models\Category_forum;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::with('category')->latest()->get();

        return view('forum.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category_forum::all();
        return view('forum.form', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required'
        ]);

        Question::create([
            'title' => $request->title,
            'content' => $request->body,
            'category_id' => $request->category_id,
            'user_id' => 1
        ]);

        return redirect()->route('forum.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $question = Question::find($id);
        $question->load('responses');

        return view('forum.show', compact('question'));
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
