<nav class="navbar sticky-top navbar-expand-lg bg-primary" >
    <div class="container-fluid ">
        <a class="navbar-brand bg-light px-2" href="{{ route('home') }}">
            <img src="{{ asset('img/logo.png') }}" alt="INeedABabyssiter" height="100" width="106"/>
        </a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown btn btn-info">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href=""> Home </a></li>
                            <li> <a  class="dropdown-item" href="">Activités </a></li>
                            <li> <a  class="dropdown-item" href="">Bon plan  </a></li>
                            <li> <a  class="dropdown-item" href="">Forum </a></li>
                            <li> <a  class="dropdown-item" href="">A propos </a></li>
                        </ul>
                    </li>

                    <li class="nav-item btn btn-secondary">
                        <a class="nav-link " href="#" role="button" >
                            Connexion
                        </a>

                    </li>
                    <li class="nav-item btn btn-success ">
                        <a class="nav-link " href="#" role="button" >
                            Inscription
                        </a>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('img/langues/drap_BEL.jpg') }}" alt="INeedABabyssiter" height="100" width="106"/>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href=""><img src="{{ asset('img/langues/drap_EN.jpg') }}" alt="INeedABabyssiter" height="100" width="106"/></a></li>
                            <li><a class="dropdown-item" href=""><img src="{{ asset('img/langues/drap_FR.jpg') }}" alt="INeedABabyssiter" height="100" width="106"/></a></li>


                        </ul>
                    </li>

            </ul>
            <div>
                <div class="nav-item dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ariz
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
