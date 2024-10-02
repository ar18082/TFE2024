@extends('base')
@section('title', 'Activités')
@section('content')
    @include('shared.header')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1>@yield('title')</h1>
            ajouter search bar
        </div>
        <div class="row">
            @foreach($activities as $activity)
                @foreach($activity->activity_parent as $nbr_child)
                    @php
                        $nbr += $nbr_child->nbr_children;
                    @endphp
                @endforeach
                    <div class="col-xl-4 col-md-4 mb-3 mb-lg-5">
                        <!--Card-->
                        <div class="card overflow-hidden text-center">
                            <div class="card-body p-0">
                                <!--avatar-->

                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="avatar-img img-fluid rounded-circle" alt="">

                                <h5 class="mb-0 pt-3">
                                    <a href="#" class="text-reset">{{$activity->title}}</a>
                                </h5>
                                <span class="text-muted small d-block mb-4">{{$activity->description}}</span>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                                        <span class="text-muted small">Combien ? </span>
                                        <strong>{{$activity->price}} €</strong>
                                    </li>
                                    <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                                        <span class="text-muted small">Quand ?</span>
                                        <strong>{{ \Carbon\Carbon::parse($activity->date_activity)->format('d-m-Y') }}</strong>
                                    </li>
                                    <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                                        <span class="text-muted small">Nombre d'enfants inscrits:  </span>
                                        <strong>{{$nbr}} / {{$activity->nbr_children}}</strong>
                                    </li>
                                    <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                                        @if($nbr == $activity->nbr_children)
                                            <span class="text-muted small d-flex align-items-center">
                                    <span class="align-middle lh-1 me-1 size-5 border border-4 border-danger rounded-circle d-inline-block"></span>
                                        Offline
                                    </span>
                                        @else
                                            <span class="text-muted small d-flex align-items-center">
                                    <span class="align-middle lh-1 me-1 size-5 border border-4 border-success rounded-circle d-inline-block"></span>
                                        Online
                                    <div class="dropdown">
                                        <button class="btn colorFour dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            s'inscrire
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li>
                                                <div class="dropdown-item">
                                                    <form action="{{route('activity.inscription')}}" method="POST">
                                                        @csrf
                                                        <label for="nbr_children">Nombre d'enfants</label>
                                                        <input type="number"  id="nbr_children" name="nbr_children">
                                                        <input type="hidden" name="activity_id" value="{{$activity->id}}">
                                                        <input type="hidden" name="parent_user_id" value="12">
                                                        <button type="submit" class="btn thirdColor">Enregistrer</button>
                                                    </form>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

            @endforeach
        </div>
    </div>
    @include('shared.footer')




@endsection
