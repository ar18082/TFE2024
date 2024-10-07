<nav class="navbar sticky-top navbar-expand-lg firstColor" >
    <div class="container-fluid ">
        <a class="navbar-brand bg-light px-2" href="{{ route('home') }}">
            <img src="{{ asset('img/logo.png') }}" alt="INeedABabyssiter" height="100" width="106"/>
        </a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @if(!request()->is('inscription'))
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown btn colorFour m-2">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('home')}}">Home</a></li>
                        <li><a class="dropdown-item" href="{{route('activity.index')}}"> Activités </a></li>
                        <li><a class="dropdown-item" href="{{route('goodPlan.index')}}"> Bon plan  </a></li>
                        <li><a class="dropdown-item" href="{{route('forum.index')}}"> Forum</a></li>
                        <li><a class="dropdown-item" href=""> A propos</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown btn thirdColor m-2 ">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        Langue
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Français   <img src="{{asset('img/langues/drap_FR.jpg')}}" alt="drapFR" width="30" height="30"></a></li>
                        <li><a class="dropdown-item" href="">Anglais    <img src="{{asset('img/langues/drap_EN.jpg')}}" alt="drapEN" width="40" height="30"></a></li>
                    </ul>
                </li>
            </ul>

            <div>

                    <div class="nav-item dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @if(Auth::user() and Auth::user()->email_verified_at != null)
                                <i class="fas fa-user "></i>

                            @else
                            <i class="fas fa-user "></i>
                            @endif

                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            @if(Auth::user()->email_verified_at != null)
                                @if(Auth::user()->role[0] == 'admin')
                                        <li><a class="dropdown-item" href="{{ route('dashboard.admin') }} ">Profil</a></li>
                                @elseif(Auth::user()->role[0] == 'babysitter')
                                        <li><a class="dropdown-item" href="{{ route('dashboard.babysitter', Auth::user()->id ) }} ">Profil</a></li>
                                @elseif(Auth::user()->role[0] == 'parent')
                                        <li><a class="dropdown-item" href="{{ route('dashboard.parent', Auth::user()->id ) }} ">Profil</a></li>
                                @endif


                            <li><hr class="dropdown-divider"></li>
                            <li><form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">Se déconnecter</a>
                                </form>
                            </li>
                            @else
                            <li><a class="dropdown-item" href="{{ route('login') }}">Se connecter</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">S'inscrire</a></li>
                            @endif
                        </ul>
                    </div>
            </div>
            @endif
        </div>
</nav>
