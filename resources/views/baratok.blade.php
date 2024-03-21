<x-app-layout>
    <div id="profilok">
    
        <h1 class="text-center">#{{ $user->name }} barátai</h1>

        @if($baratok->isEmpty())
            <div class="text-center" role="alert">
                Nincsenek barátaim 🙁
            </div>
        @endif

        <div class="row justify-content-center">
            @foreach ($baratok as $barat)
                <div class="col-md-5">
                    <div class="card">
                        <a href="{{ route('profil', ['username' => $barat->username]) }}">
                            <img src="{{ URL::asset('user/'.$barat->profilkep) }}" height="auto" width="80px">
                            {{ $barat->name }}
                            @if ($barat->admin)
                                <span id="adminisztrator"> Adminisztrátor </span>
                            @endif
                            @if (Auth::user()->username == $barat->username)
                                <span id="sajatfiok">(Saját fiók)</span>
                            @endif
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
