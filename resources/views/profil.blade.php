<x-app-layout>

    <div class="container mt-4" id="profil">
        <div class="row justify-content-center" id="profilrow">
            <div class="col-md">
                <div class="card">
                    <img src="{{ asset('user/' . $user->boritokep) }}" class="card-img-top" alt="Borítókép" id="boritokep">
                    <img src="{{ asset('user/' . $user->profilkep) }}" class="card-img-top" alt="Profilkép" id="profilkep">

                        <div class="text-center">
                            <h3>{{ $user->name }}</h3>
                            <h5>{{ $user->username }}  @if ($user->admin)
                             👑
                            @endif</h5>
                            @if (Auth::user()->username == $user->username)

                            @else
                            <a href="{{ route('baratok', ['username' => $user->username]) }}" class="nav-link">Barátok</a>
                            @endif
                        </div>

                        @if (Auth::user()->username == $user->username)
                        <div class="text-right ml-auto" id="profilgombdiv">

                                <a id="profilgomb" href="{{ route('profile.edit') }}" class="gomb feherhtr">{{ __('Profil szerkesztése') }}</a>

                        </div>
                        @endif
                        @if (Auth::user()->username != $user->username)

                        @endif

                </div>
            </div>
        </div>
        <div class="row justify-content-center tartalomrow">

            <div class="col-md-3">

                <div class="card" id="design">

                    @if ($user->bemutatkozas != 'Nincs megadva')
                    <div class="designszekcio">
                        <h5>Bemutatkozás</h5>
                        <p class="card-text text-center">{{ $user->bemutatkozas }}</p>
                    </div>
                    @endif
                    @if ($user->lakhely != 'Nincs megadva')
                    <div class="designszekcio">
                        <h5>Lakhely</h5>
                        <p class="card-text text-center">{{ $user->lakhely }}</p>
                    </div>
                    @endif
                        <div class="designszekcio">
                        <h5>Születési dátum</h5>
                        <p class="card-text text-center">{{ $user->szulev }}</p>
                    </div>
                    @if ($user->neme != 'Nincs megadva')
                        <div class="designszekcio">
                            <h5>Neme</h5>
                            <p class="card-text text-center">{{ $user->neme }}</p>
                        </div>

                    @endif
                    <div class="designszekcio">
                        <h5>E-mail</h5>
                        <p class="card-text text-center">{{ $user->email }}</p>
                            </div>
                </div>

            </div>
            <div class="col-md">
         @if (Auth::user()->username == $user->username)

         @include('bejegyzes-letrehozas')

          @endif
          @if($user->posts->isNotEmpty())
          @foreach($user->posts->sortByDesc('created_at')  as $post)
          <div class="card p-2" id="bejegyzes">
            <div class="card-header">
                <img src="{{ asset('user/'.$post->user->profilkep) }}" alt="" style="border-radius:100%; margin-right:10px;" height="35px" width="auto">
                <a href="" style="text-decoration: none; color: var(--betuszin);" class="syne-bold">{{$post->user->name}}</a>
                <span class="bejegyzespostolva">Posztolva: {{$post->created_at}}</span>
            </div>
            <div class="row">
                <div class="col-md">
                    <div >
                        <h5 class="bejegyzescim syne-bold">{{$post->title}}</h5>
                        <p class="bejegyzestartalom syne-regular">{{ $post->context }}</p>
                    </div>
                    @if(!empty($post->imagepath))
                    <img src="{{ asset('user/'.$post->imagepath) }}" alt="{{ asset('user/'.$post->imagepath) }}" class="img-fluid bejegyzeskep">
                    @endif
                </div>
            </div>
            <div>
                @if(Auth::check() && (Auth::user()->id === $post->user->id || Auth::user()->admin))
                <a href="{{ route('post.edit', $post->id) }}" class="gomb feherhtr float-start">Szerkesztés</a>
                    <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="gomb feherhtr float-end">Törlés</button>
                    </form>
                @endif
            </div>
        </div>
          @endforeach
        @elseif(Auth::user()->username == $user->username && $user->posts->isEmpty() )
        <p>Nincsenek posztjaid.</p>
        @elseif(Auth::user()->username !== $user->username  && $user->posts->isEmpty() )
        <p>Nincsenek posztjai.</p>


      @endif


            </div>
            </div>





            </div>
        </div>
    </div>
</x-app-layout>
