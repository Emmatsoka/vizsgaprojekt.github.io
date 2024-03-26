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
        

            </div>
            </div>





            </div>
        </div>
    </div>
</x-app-layout>