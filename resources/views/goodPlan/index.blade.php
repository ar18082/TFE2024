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
                <div class="col-xl-4 col-md-4 mb-3 mb-lg-5">
                    <!--Card-->
                    <div class="card overflow-hidden text-center">
                        <div class="card-body p-0">
                            <!--avatar-->

                            <img src="{{asset($goodPlan->images[0]->url)}}" class="avatar-img img-fluid rounded-circle" alt="">

                            <h5 class="mb-0 pt-3">
                                <a href="#" class="text-reset">{{$goodPlan->title}}</a>
                            </h5>
                            <span class="text-muted small d-block mb-4">{{$goodPlan->description}}</span>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                                    <span class="text-muted small">Quand ? </span>
                                    <strong>{{'Du '. \Carbon\Carbon::parse($goodPlan->date_start)->format('d-m-Y') . ' au '. \Carbon\Carbon::parse($goodPlan->date_end)->format('d-m-Y')}}</strong>
                                </li>
                                <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                                    <span class="text-muted small">où ? </span>
                                    <strong></strong>
                                </li>
                                <li class="list-group-item px-3 d-flex align-items-center justify-content-between">
                                    @if($date < $goodPlan->date_end)
                                        <span class="text-muted small d-flex align-items-center">
                                <span class="align-middle lh-1 me-1 size-5 border border-4 border-success rounded-circle d-inline-block"></span>
                                Online
                            </span>
                                    @else
                                        <span class="text-muted small d-flex align-items-center">
                                <span class="align-middle lh-1 me-1 size-5 border border-4 border-danger rounded-circle d-inline-block"></span>
                                Offline
                            </span>
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
