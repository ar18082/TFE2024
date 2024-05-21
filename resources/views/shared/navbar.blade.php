<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary" >
    <div class="container-fluid">
        <a class="navbar-brand bg-light px-2" href="{{ route('home') }}">
            <img src="{{ asset('img/logo.png') }}" alt="Aquatel" height="28" width="106"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('immeubles.*') ? 'active' : '' }}" href="" >Immeubles</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Planning
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Evenements</a></li>
                            <li> <a  class="dropdown-item" href="">Calendrier</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Documents
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Bons de route</a></li>
                            <li><a class="dropdown-item" href="">Avis de passage</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Facturation
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Triage</a></li>
                            <li><a class="dropdown-item" href="}">Liste factures </a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Centrale
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Liste</a></li>
                            <li><a class="dropdown-item" href="#">Nouvelle centrale</a></li>
                            <li><a class="dropdown-item" href="#">Liste erreurs</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            XML
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">test parser</a></li>
                            <li><a class="dropdown-item" href="">test Generate</a></li>


                        </ul>
                    </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Admin
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="">Appareils</a></li>
                                <li><a class="dropdown-item" href="">Contacts</a></li>
                                <li><a class="dropdown-item" href="}">File Storage</a></li>
                                <li><a class="dropdown-item" href="">Techniciens</a></li>
                                <li><a class="dropdown-item" href="">User</a></li>




                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="">Quick Regen</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Type
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="">Status Technicien</a></li>
                                <li><a class="dropdown-item" href="#">Type Matériel * </a></li>
                                <li><a class="dropdown-item" href="" >Type Event</a></li>
                                <li><a class="dropdown-item" href="">Type erreurs</a></li>
                                <li><a class="dropdown-item" href="">Couleur</a></li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('immeubles.*') ? 'active' : '' }}" href="" @if(request()->routeIs('immeubles.*')) aria-current="page" @endif  >Immeubles</a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link" href="">Planning</a>
                        </li>

            </ul>



            <div>
                <div class="nav-item dropdown">
                    <a class="btn btn-outline-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="">Profil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">Se déconnecter</a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</nav>
