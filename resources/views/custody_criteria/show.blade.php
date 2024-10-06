@extends('base')
@section('title', 'Critères de garde')
@section('content')
    @include('shared.header')

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$criteria->custody_criteria}}</h5>
            <p class="card-text">{{$criteria->description}}</p>
            <a href="{{route('custodyCriteria.index')}}" class="btn thirdColor">Retour à la liste</a>

        </div>
    </div>

    @include('shared.footer')
@endsection
