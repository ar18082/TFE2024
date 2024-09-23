@extends('base')
@section('title', 'Activités')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1>@yield('title')</h1>

        </div>

        <div class="row">
            @foreach($activities as $activity)
                @foreach($activity->activity_parent as $nbr_child)
                    @php
                        $nbr += $nbr_child->nbr_children;
                    @endphp
                @endforeach
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">

                        <div class="card-body">
                            <h5 class="card-title">{{$activity->title}}</h5>
                            <p class="card-text">{{$activity->description}}</p>
                            <p class="card-text">{{$activity->price}} €</p>
                            <p class="card-text">{{ \Carbon\Carbon::parse($activity->date_activity)->format('d-m-Y') }}</p>
                            <p class="card-text">Nombre d'enfants inscrits: {{$nbr}} / {{$activity->nbr_children}}</p>
                            @if($nbr == $activity->nbr_children)

                                <button type="button" class="bg-danger">Complet</button>
                            @else

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



                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>



@endsection
