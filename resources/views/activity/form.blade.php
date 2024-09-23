@extends('base')
@section('title', $activity->exists ? 'Modifier l\'activité' : 'Créer une activité')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1>@yield('title')</h1>
        </div>
        <form action="{{$activity->exists ? route('activity.update', $activity->id) : route('activity.store')}}" method="post">
            @if($activity->exists)
                @method("PUT")
            @endif
            @csrf
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" class="form-control" id="title" name="title"  value="{{$activity->title}}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required>{{$activity->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Prix</label>
                <input type="number" class="form-control" id="price" name="price" value="{{$activity->price}}"  required>
            </div>
            <div class="form-group">
                <label for="nbr_children">Nombre d'enfants</label>
                <input type="number" class="form-control" id="nbr_children" name="nbr_children" value="{{$activity->nbr_children}}" required>
            </div>
            <div class="form-group">
                <label for="date_activity">Date de l'activité</label>
                <input type="date" class="form-control" id="date_activity" name="date_activity" value="{{$activity->date_activity}}" required>
            </div>
            <div class="form-group">
                <label for="visible_start">Visible du </label>
                <input type="date" class="form-control" id="visible_start" name="visible_start"  value="{{$activity->visible_start}}" required>
            </div>
            <div class="form-group">
                <label for="visible_end">jusqu'au </label>
                <input type="date" class="form-control" id="visible_end" name="visible_end" value="{{$activity->visible_end}}" required>
            </div>
            <div class="form-group mt-4">
                <button type="submit" class="btn thirdColor">
                    @if($activity->exists)
                        Modifier
                    @else
                        Créer
                    @endif
                </button>
            </div>
        </form>

@endsection
