@extends('base')
@section('title', 'Bons plans')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1>@yield('title')</h1>
            <a href="{{route('goodPlan.create')}}" class="btn thirdColor">Créer un Bon plan</a>
        </div>

        <div class="row">
            @foreach($goodPlans as $goodPlan)

                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset($goodPlan->images[0]->url)}}" class="card-img-top" alt="test">
                            <div class="card-body">
                                <h5 class="card-title">{{$goodPlan->title}}</h5>
                                <p class="card-text">{{$goodPlan->description}}</p>
                                <p class="card-text">Du {{$goodPlan->date_start}} au {{$goodPlan->date_end}}</p>
                            </div>
                        </div>
                    </div>

            @endforeach
        </div>
    </div>



@endsection
