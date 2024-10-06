@extends('base')

@section('title', 'tableau de bord babysitter')

@section('content')
    <body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <a class="nav-link" href="#" id="btnUsers">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                            Tableau de bord
                        </a>
                        <a class="nav-link" href="#" id="btnActivities">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-volleyball"></i></div>
                             Mes activités
                        </a>
                        <a class="nav-link" href="#" id="btnCriterias">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-list"></i></div>
                            Mes critères de grade
                        </a>
                        <a class="nav-link" href="#" id="btnGoodPlan">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-thumbs-up"></i></div>
                            Mes Bons plans
                        </a>
                        <a class="nav-link" href="#" id="btnForum">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-comment"></i></div>
                            Mon Forum
                        </a>
                        <a class="nav-link" href="#" id="btnForum">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-message"></i></div>
                            Mes Commentaires
                        </a>
                        <a class="nav-link" href="#" id="btnForum">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-heart"></i></div>
                            Mes Favoris
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <div class="row">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Nombre d'étoiles
                        </div>
                        <div class="card-body"><canvas id="CommentChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                            Calendrier
                        </div>
                        <div class="card-body"><canvas id="Calendar" width="100%" height="40"></canvas></div>
                    </div>
                </div>
            </div>
            @include('user.userProfil')

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
