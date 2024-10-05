@extends('base')

@section('title', 'Home')

@section('content')

@include('shared.header')
{{--<div class="container" style="height: 10rem">--}}
{{--    @include('search.searchResult')--}}
{{--</div>--}}
<div class="container containerRuban">
    <div class="row">
        <div class="col-sm-6 col-lg-4">
            <div class="card hover-img">
                <div class="card-body p-4 text-center border-bottom body_ruban">
                    <img src="{{ asset('storage/images/other/efficace.jpg') }}" alt="" class="rounded-circle mb-3" width="150" height="150">
                    <h5 class="fw-semibold mb-0">Efficace</h5>
                    <p>De nouveles annonees régulièrement mis à jour</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="card hover-img">
                <div class="card-body p-4 text-center border-bottom body_ruban">
                    <img src="{{ asset('storage/images/other/certified.png') }}" alt="" class="rounded-circle mb-3" width="200" height="200">
                    <h5 class="fw-semibold mb-0">Baby-sitter certifié</h5>
                    <p>Baby-sitter avec et sans diplome mais avec de
                        l’expérience, profil complet, verifié, avis et
                        commentaire d’autres parents</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="card hover-img">
                <div class="card-body p-4 text-center border-bottom body_ruban">
                    <img src="{{ asset('storage/images/other/gratuit.jpg') }}" alt="" class="rounded-circle mb-3" width="200" height="150">
                    <h5 class="fw-semibold mb-0">Gratuit</h5>
                    <p>Inscription et correspondance gratuite </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="containerBabysitterOfMonth">
    <div class="container_title">
        <div class="line"></div>
        <h2>Notre Baby-sitter du mois</h2>
        <div class="line"></div>
    </div>
    <div class="containerBabysitterOfMonth_body">
        <div class="comment_BabysitterOfMonth ">
            <h3>Témoignages</h3>
        </div>
        <div class="body_BabysitterOfMonth container">

            @include('user.index')
        </div>
    </div>
</div>
<div class="containerWhoIm">
    <div class="container_title">
        <div class="line"></div>
        <h2>Qui suis-je ? </h2>
        <div class="line"></div>
    </div>
    <div class="containerWhoIm_body row">
        <div class="imageWhoIm col-6">
            <img src="{{ asset('storage/images/other/whoIm.jpg') }}" alt="" class="rounded-circle mb-3" width="80%" height="auto">
        </div>
        <div class="bodyWhoIm col-6 mr-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eleifend condimentum mattis. Vivamus
                euismod, turpis sed dignissim pretium, metus tortor aliquet tortor, quis commodo felis nunc vel turpis.
                Pellentesque massa dolor, pulvinar in lorem consectetur, dapibus dignissim ante. In hac habitasse
                platea dictumst. Aenean vitae commodo justo. In nec malesuada magna. Sed nec arcu diam.Morbi sed
                metus molestie, aliquet justo aliquam, accumsan magna. Cras sit amet nisi in quam gravida dignissim
                sed ut nunc. Nulla in purus at erat rutrum auctor ut vitae tortor. Ut eu blandit est, ut euismod enim.
                Aliquam eu risus feugiat, consectetur erat eget, blandit orci. Pellentesque tempus mi a consectetur
                hendrerit. Integer tempor leo eget dolor bibendum bibendum. Praesent in gravida est. Pellentesque
                malesuada luctus vestibulum. Morbi consectetur quam et luctus facilisis.

                Etiam suscipit blandit diam non malesuada. Cras ornare velit non porta imperdiet. Suspendisse ut
                volutpat nibh, sollicitudin blandit quam. In non aliquam ante. Sed sed dapibus enim. Aliquam eget nulla
                vitae justo volutpat bibendum ut sed tellus. Donec dignissim eros ac est dictum egestas. Aliquam sed
                interdum eros. Nullam lobortis lectus ut nulla dictum malesuada non non diam. Maecenas tristique
                convallis diam sit amet faucibus. Pellentesque velit nisl, varius congue pretium ac, ullamcorper ac
                purus. Pellentesque quis ullamcorper ex. Nulla tempor nulla sapien, quis aliquet risus tempor id.
                Pellentesque fringil</p>
        </div>
    </div>
</div>


@include('shared.footer')

{{--    @include('user.index')--}}




{{--    @livewire('create-activity')--}}
{{--    @foreach($users as $user)--}}
{{--        <div class="card" style="width: 18rem;">--}}
{{--            <img src="{{asset($user->image[0]->url)}}" class="card-img-top" alt="image of user">--}}
{{--            <div class="card-body">--}}
{{--                <h5 class="card-title">{{$user->name}} {{$user->firstname}}</h5>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endforeach--}}

@endsection
