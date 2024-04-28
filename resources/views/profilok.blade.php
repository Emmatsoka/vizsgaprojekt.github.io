<x-app-layout>
    <div id="profilok">
        @if ($query == '')
            <h1 class="text-center">#ÖSSZES FELHASZNÁLÓ</h1>
        @else
            <h1 class="text-center">#KERESÉSI EREDMÉNYEK: "{{ $query }}"</h1>
        @endif

        @if($users->isEmpty())
            <div class="text-center" role="alert">
                Nincs találat.
            </div>
        @endif

        <div class="row justify-content-center">
            @foreach ($users as $user)
                <div class="col-lg-5">
                    <div class="card">
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('profil', ['username' => $user->username]) }}" >
                                    <img src="{{ URL::asset('user/'.$user->profilkep) }}" height="80px" width="80px">
                                </a>
                            </div>
                            <div class="col">
                                <a href="{{ route('profil', ['username' => $user->username]) }}" id="profilnev">
                                    {{ $user->name }}<br><span class="szurke">{{ $user->username }}</span>
                                    @if ($user->admin)
                                        <br><span class="szurke"> Adminisztrátor </span>
                                    @endif
                                    @if (Auth::user()->username == $user->username)
                                        <br><span class="szurke">(Saját fiók)</span>
                                    @endif
                                </a>
                            </div>

                            <div class="col ">
                                @if (Auth::user()->username !== $user->username)
                                <div class="baratkerelemgombok" >
                                <a href="{{ url('baratok')}}" class="gomb feketehtr " >Jelölés</a>
                            </div>
                            @endif
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if($users->total() > 10)
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <ul class="custom-pagination">
                        @if ($users->onFirstPage())
                            <li class="disabled"><span>← Előző</span></li>
                        @else
                            <li><a href="{{ $users->appends(request()->input())->previousPageUrl() }}">← Előző</a></li>
                        @endif
                        <!-- Számok a lapokhoz -->
                        @for ($i = 1; $i <= $users->lastPage(); $i++)
                            @if ($i == $users->currentPage())
                                <li class="aktivoldal"><span>{{ $i }}</span></li>
                            @else
                                <li><a href="{{ $users->url($i) }}">{{ $i }}</a></li>
                            @endif
                        @endfor
                        <!-- Következő gomb -->
                        @if ($users->hasMorePages())
                            <li><a href="{{ $users->appends(request()->input())->nextPageUrl() }}">Következő →</a></li>
                        @else
                            <li class="disabled"><span>Következő →</span></li>
                        @endif
                    </ul>
                </div>
            </div>
        @endif
    </div>
</div>
</x-app-layout>
