@extends('base')

@section('title', 'Home')

@section('content')
    <h1>coucou</h1>
{{--    @livewire('create-activity')--}}
    @foreach($users as $user)
        <div class="card" style="width: 18rem;">
            <img src="{{asset($user->image[0]->url)}}" class="card-img-top" alt="image of user">
            <div class="card-body">
                <h5 class="card-title">{{$user->name}} {{$user->firstname}}</h5>
            </div>
        </div>
    @endforeach

@endsection
