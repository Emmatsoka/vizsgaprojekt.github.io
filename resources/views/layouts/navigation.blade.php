<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}"><img src="Wesoc_logo_white_png.png" height="auto" width="100px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">{{ __('') }}</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <div class="dropdown">
                    <a class=" dropdown-toggle text-dark" href="#" role="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{URL::asset('user/'.Auth::user()->profilkep)}}" height="auto" width="35px">{{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('profilom') }}">{{ __('Profilom') }}</a></li>
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
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
