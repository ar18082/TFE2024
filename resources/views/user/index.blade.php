@extends('base')

@section('title', 'profile')
@section('content')
    <div class="container">
        <div class="card mb-3" style="max-width: 1000px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset($user->image[0]->url)}}" class="card-img-top" alt="image of user">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$user->name}} {{$user->firstname}}</h5>
                        @if($user->babysitter_user_id != null)
                            <p class="card-text"><small class="text-body-secondary">{{$user->babysitterUser->price}}</small></p>
                            <p class="card-text">{{$user->babysitterUser->description}}</p>
                        @elseif($user->parent_user_id != null)
                            <p class="card-text">{{$user->parentUser->description}}</p>
                        @endif
                        <p class="card-text"><small class="text-body-secondary">{{$user->postal_code_localite->postCode}}  {{$user->postal_code_localite->localite}}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
