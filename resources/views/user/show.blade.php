@extends('base')

@section('content')
    @if(auth()->user())
    <div class="d-flex justify-content-between align-items-center">
        <a href="{{route('dashboard.admin')}}" class="btn colorFour">Retour</a>
    </div>
    @endif
    <div class="container">
        @include('user.userProfil')
    </div>
@endsection
