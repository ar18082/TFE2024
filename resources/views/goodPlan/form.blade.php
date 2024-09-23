@extends('base')
@section('title', 'Créer un Bon plan ')
@section('content')
<div class="container">

    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{route('goodPlan.index')}}" class="btn thirdColor">Retour</a>
    </div>

    <form action="{{route('goodPlan.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title" class="form-label">Titre : </label>
            <input type="text" name="title" placeholder="Titre"  class="form-control">
        </div>
        <div class="form-group">
            <label for="description" class="form-label">Description : </label>
            <textarea  name="description"  class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="startDate" class="form-label">Date de début : </label>
            <input type="date" name="startDate"  class="form-control">
        </div>
        <div class="form-group">
            <label for="endDate" class="form-label">Date de fin : </label>
            <input type="date" name="endDate"  class="form-control">
        </div>
        <div class="form-group">
            <label for="image" class="form-label">Image : </label>
            <input type="file" name="image"  class="form-control">
        </div>
        <div class="form-group mt-4">
            <button type="submit" class="btn colorFour">Submit</button>
        </div>

    </form>
</div>

@endsection
