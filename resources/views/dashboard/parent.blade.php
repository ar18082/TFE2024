@extends('base')

@section('title', 'tableau de bord parent')

@section('content')
    <body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <a class="nav-link" href="#" id="btnParent">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                            Tableau de bord
                        </a>
                        <a class="nav-link" href="#" id="btnCalendarParent">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-calendar"></i></div>
                            Mon calendrier
                        </a>
                        <a class="nav-link" href="#" id="btnActivitiesParent">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-volleyball"></i></div>
                            Mes activités
                        </a>
                        <a class="nav-link" href="#" id="btnGoodPlanParent">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-thumbs-up"></i></div>
                            Mes Bons plans
                        </a>
                        <a class="nav-link" href="#" id="btnForumParent">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-comment"></i></div>
                            Mon Forum
                        </a>
                        <a class="nav-link" href="#" id="btnCommentParent">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-message"></i></div>
                            Mes Commentaires
                        </a>
                        <a class="nav-link" href="#" id="btnFavoriteParent">
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
                        <input type="hidden" id="userId" value="{{$user->babysitter_user_id ?? $user->parent_user_id}}">
                        <div class="card-body"><canvas id="CommentChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn thirdColor" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-plus"></i> Evenement
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Créer un évènement</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @include('event.form')
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="containerCalendar">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('user.userProfil')
            @include('dashboard.parent.templateActivity')
            @include('dashboard.parent.templateGoodPlan')
            @include('dashboard.parent.templateForum')
            @include('dashboard.parent.templateComment')
            @include('dashboard.parent.templateFavorite')
            @include('dashboard.parent.templateCalendar')
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                    </div>
                </div>
            </footer>
        </div>
    </div>
    </body>

@endsection
