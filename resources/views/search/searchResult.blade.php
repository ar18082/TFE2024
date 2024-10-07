@extends('base')
@section('content')
@include('shared.header')

<div class="row">

@if (!empty($searchResults))
    <div class="mt-4 row col-12">
        <h3>Résultat de la recherche :</h3>

        <div id="map" style="height: 500px; width: 100%;"></div>


    @foreach ($searchResults as $user)
            <div class="col-4">
                @include('user.index')
            </div>

        @endforeach

    </div>
        <div class="mt-4 row col-4">
                {{ $searchResults->links('vendor.pagination.bootstrap-4') }}
        </div>
@endif


</div>
@endsection
