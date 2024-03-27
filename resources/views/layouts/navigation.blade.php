<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
        <a class="navbar-brand icon" href="{{ url('dashboard') }}"><img src="{{asset('Wesoc_logo_white_png.png')}}" height="auto" width="100px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
          
                    <form class="d-flex" action="{{ route('search') }}" method="GET">
                        <input class="me-2" type="search" placeholder="Keresés" aria-label="Search" name="query">
                        <button class="gomb keresogomb  icon " type="submit"><img src="{{ asset('pics/search.png') }}" height="auto" class="invertalt" width="22px"></button>
                    </form>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item "> 
               <div class="dropdown  ">
                    <a class=" drpdwn attunes profil" href="#" role="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{URL::asset('user/'.Auth::user()->profilkep)}}" class="" height="auto" width="35px">{{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('profil', ['username' => Auth::user()->username]) }}"><img src="{{asset('pics/user.png')}}"  height="auto" width="25px">{{ __('Profilom') }}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('baratok', ['username' => Auth::user()->username]) }}"><img src="{{asset('pics/friends.png')}}"  height="auto" width="25px">{{ __('Barátaim') }}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}"><img src="{{asset('pics/editprofile.png')}}"  height="auto" width="25px">{{ __('Profil szerkesztése') }}</a></li>
   
                 
                    </ul>
                </div>
            </li>
                <li class="nav-item ">
                     
                       <div class="dropdown navgomb ">
                        <a class=" drpdwn " href="#" role="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('pics/options.png')}}" class="icon invertalt attunes" height="auto" width="20px">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('profile.vedelem') }}"><img src="{{asset('pics/shield.png')}}"  height="auto" width="25px">Védelem</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><img src="{{asset('pics/optionsdrp.png')}}"  height="auto" width="25px">Beállítások</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{url('tema')}}"><img src="{{asset('pics/theme.png')}}" height="auto" width="25px">Téma</a></li>
                        </ul>
                    </div>
                </li>
               
         
         
              <li class="nav-item navgomb ">
                <a class="">        <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item"><img src="{{asset('pics/logout.png')}}" height="auto"  class="icon attunes"  width="20px" style="margin-right: 0px !important"></button>
                </form></a>
            </li>
            </ul>
        </div>
    </div>
</nav>
