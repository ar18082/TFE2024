@extends('base')

@section('title', 'Tableau de bord')

@section('content')

{{--<nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
{{--    <a class="navbar-brand" href="#">Tableau de bord</a>--}}
{{--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}
{{--    <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--        <ul class="navbar-nav mr-auto">--}}

{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="#">Profil</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="#">Activié</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="#">Agenda</a>--}}
{{--            </li>--}}
{{--        </ul>--}}

{{--    </div>--}}
{{--</nav>--}}

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <div class="nav-link" id="linkDashboard">
                            <i class="fa-solid fa-house"></i>
                            Tableau principal <span class="sr-only">(current)</span>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link" id="linkActivities" >
                            <i class="fa-solid fa-ferris-wheel"></i>
                            Activités
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link" id="linkGoodPlan" >
                            <i class="fa-solid fa-cart-shopping"></i>
                            Bon plan
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link" id="linkCustodies" >
                            <i class="fa-solid fa-list"></i>
                            Critère de garde
                        </div>
                    </li>
{{--                    <li class="nav-item" id="linkAgenda">--}}
{{--                        <div class="nav-link" >--}}
{{--                            <i class="fa-solid fa-calendar"></i>--}}
{{--                            Agenda--}}
{{--                        </div>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <div class="nav-link" id="linkAbus">
                            <i class="fa-solid fa-user-police"></i>
                            Abus
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">Tableau de bord</h1>

            </div>
            @if(auth()->user())
                @if(auth()->user()->role == 'babySitter' or auth()->user()->role == 'parent')
                    @include('dashboard.chart')
                @elseif(auth()->user()->role == 'superAdmin')
                    @include('dashboard.listingUser')
                @endif
            @endif

            @include('dashboard.listingUser')

        </main>
    </div>
</div>
@endsection
