@extends('base')

@section('title', 'Forum')

@section('content')
    <div class="container">
        <h1>Forum</h1>
        <a href="{{ route('forum.create') }}" class="btn btn-primary">Créer un sujet</a>

        <div class="list-group mt-4">
            @foreach ($questions as $question)
                <a href="{{ route('forum.show', $question->id) }}" class="list-group-item">
                    <h4>{{ $question->title }}</h4>
                    <p>Catégorie : {{ $question->category->name }}</p>
                </a>
            @endforeach
        </div>
    </div>
@endsection
