<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
        <a class="navbar-brand icon" href="{{ route('dashboard') }}"><img src="{{asset('Wesoc_logo_white_png.png')}}" height="auto" width="100px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
          
                    <form class="d-flex" action="{{ route('search') }}" method="GET">
                        <input class="me-2" type="search" placeholder="Keresés" aria-label="Search" name="query">
                        <button class="gomb keresogomb icon" type="submit"><img src="{{ asset('pics/search.png') }}" height="auto" width="22px"></button>
                    </form>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                <div class="dropdown  ">
                    <a class=" drpdwn " href="#" role="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{URL::asset('user/'.Auth::user()->profilkep)}}" height="auto" width="35px">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('profil', ['username' => Auth::user()->username]) }}">{{ __('Profilom') }}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('baratok', ['username' => Auth::user()->username]) }}">{{ __('Barátaim') }}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Profil szerkesztése') }}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">{{ __('Kijelentkezés') }}</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </li>
                <li class="nav-item">
                     
                       <div class="dropdown navgomb">
                        <a class=" drpdwn " href="#" role="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('pics/options.png')}}" class="icon invertalt" height="auto" width="20px">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('profile.vedelem') }}">Védelem</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Beállítások</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Téma</a></li>
                        </ul>
                    </div>
                </li>
               
         
         
              <li class="nav-item navgomb ">
                <a class="">        <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item"><img src="{{asset('pics/logout.png')}}" height="auto"  class="icon "  width="20px"> </button>
                </form></a>
            </li>
            </ul>
        </div>
    </div>
</nav>
