@extends('base')

@section('title', 'Forum|Créer un sujet')

@section('content')

    <div class="container">
        <h1>Créer un nouveau sujet</h1>

        <form action="{{ route('forum.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="body">Contenu</label>
                <textarea name="body" class="form-control" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="category_id">Catégorie</label>
                <select name="category_id" class="form-control" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
@endsection
