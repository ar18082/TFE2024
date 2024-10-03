@extends('base')

@section('title', 'Forum')

@section('content')
    <a href="{{route('forum.index')}}" class="btn thirdColor">retour</a>
    <div class="container">
        <!-- Affichage du thread -->
        <div class="card mb-4">
            <div class="card-header">
                <h2>{{ $question->title }}</h2>
                <p>Posté par {{ $question->user->name . ' ' .$question->user->firstname}} dans la catégorie <strong>{{ $question->category->name }}</strong></p>
            </div>
            <div class="card-body">
                <p>{{ $question->content}}</p>
            </div>
        </div>

        <!-- Affichage des réponses -->
        <div class="replies mb-4">
            <h4>Réponses ({{ $question->responses->count() }})</h4>
            @foreach ($question->responses as $response)
                <div class="card mb-2">
                    <div class="card-body">
                        <p>{{ $response->content }}</p>
                        <p class="small">Posté par {{ $response->user->name }} le {{ $response->created_at->format('d/m/Y H:i') }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Formulaire pour répondre -->
        @auth
            <div class="card">
                <div class="card-header">
                    Répondre au sujet
                </div>
                <div class="card-body">
                    <form action="{{ route('response.store', $question->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="body">Votre réponse :</label>
                            <textarea name="body" id="body" rows="5" class="form-control @error('body') is-invalid @enderror" required></textarea>

                            @error('body')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn thirdColor mt-2">Poster votre réponse</button>
                    </form>
                </div>
            </div>
        @else
            <p class="text-center">Vous devez être connecté pour poster une réponse. <a href="{{ route('login') }}">Se connecter</a></p>
        @endauth
    </div>
    @include('shared.footer')
@endsection
