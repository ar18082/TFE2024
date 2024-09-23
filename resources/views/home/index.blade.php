@extends('base')

@section('title', 'Home')

@section('content')
    @if(Auth::User() and Auth::User()->email_verified_at == null)
        <div class="modal" id="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content" id="rebours">
                    <div class="modal-header">
                        <h5 class="modal-title">E-mail de confirmation envoyé</h5>

                        <button type="button" class="btn-close" id="btn_close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="modal-title" id="title">Expire dans : </h5>
                        <div class="box-rebours" >
                            <div class="box_heure">
                                <div id="heure">00</div>
                                <span id="heure_label">Heures</span>
                            </div>
                            <div class="box_minute">
                                <div id="minute">00</div>
                                <span id="minute_label">Minutes</span>
                            </div>
                            <div class="box_seconde">
                                <div id="seconde">00</div>
                                <span id="seconde_label">Secondes</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <input type="hidden" id="date" value="{{Auth::user()->created_at}}">
        <input type="hidden" id="userId" value="{{Auth::user()->id}}">

    @endif

    @include('shared.header')

    {{--@include('shared.searchForm')
--}}




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
