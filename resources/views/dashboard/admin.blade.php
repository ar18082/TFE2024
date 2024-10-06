@extends('base')

@section('title', 'tableau de bord Admin')

@section('content')

<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <a class="nav-link" href="#" id="btnUsers">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                            Utilisateurs
                        </a>
                        <a class="nav-link" href="#" id="btnActivities">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-volleyball"></i></div>
                            Activités
                        </a>
                        <a class="nav-link" href="#" id="btnCriterias">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-list"></i></div>
                            Critères de grade
                        </a>
                        <a class="nav-link" href="#" id="btnAbus">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-user-police"></i></div>
                            Abus
                        </a>
                        <a class="nav-link" href="#" id="btnForum">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-comment"></i></div>
                            Forum
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            @include('dashboard.listingUser')
            @include('dashboard.listingActivity')
            @include('dashboard.listingCriteria')
            @include('dashboard.listingAbus')
            @include('dashboard.listingForum')
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

@endsection
