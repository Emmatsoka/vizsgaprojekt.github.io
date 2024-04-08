
    <ul>
        <li><a href="{{ route('profil', ['username' => Auth::user()->username]) }}" class=""><img src="{{URL::asset('user/'.Auth::user()->profilkep)}}"  height="auto" width="25px">{{Auth::user()->name}}</a></li>
        <li><a href="{{ route('search') }}" class=""><img src="{{asset('pics/peoples.png')}}" class="invertalt" height="auto" width="25px">Összes felhasználó</a></li>
        <li><a href="{{ route('baratok', ['username' => Auth::user()->username]) }}" class=""><img src="{{asset('pics/friends.png')}}" class="invertalt" height="auto" width="25px">Barátaim</a></li>
    </ul>

