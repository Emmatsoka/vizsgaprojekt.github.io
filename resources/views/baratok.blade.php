<x-app-layout>
    <div id="profilok">
        <h1 class="text-center">#{{ $user->name }} barátai</h1>

        @if($elfogadott_baratok->isEmpty())
            <div class="text-center" role="alert">
                Nincsenek elfogadott barátaid.
            </div>
        @endif

        <div class="row justify-content-center">
            @foreach ($elfogadott_baratok as $barat)
                <div class="col-md-5">
                    <div class="card">
                        <a href="{{ route('profil', ['username' => $barat->username]) }}">
                            <img src="{{ URL::asset('user/'.$barat->profilkep) }}" height="auto" width="80px">
                            {{ $barat->name }} <span class="szurke">{{ $barat->username }}</span>
                            @if ($barat->admin)
                                <span class="szurke"> Adminisztrátor </span>
                            @endif
                            @if (Auth::user()->username == $barat->username)
                                <span class="szurke">(Saját fiók)</span>
                            @endif
                        </a>
                        <!-- Törlés gomb hozzáadása -->
                        <form action="{{ route('barat.torles', ['barat_id' => $barat->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Barát törlése</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
