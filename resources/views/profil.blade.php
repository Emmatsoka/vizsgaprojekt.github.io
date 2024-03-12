<x-app-layout>
  
    <div class="container mt-4" id="profil">
        <div class="row justify-content-center" id="profilrow">
            <div class="col-md">
                <div class="card">
                    <img src="{{ asset('user/' . $user->boritokep) }}" class="card-img-top" alt="Borítókép" id="boritokep">
                    <img src="{{ asset('user/' . $user->profilkep) }}" class="card-img-top" alt="Profilkép" id="profilkep">
            
                        <h3 class="card-title text-center" >{{ $user->name }}</h5>
       
        
            
                </div>
            </div>
        </div>
        <div class="row justify-content-center tartalomrow">

            <div class="col-md-3">

                <div class="card" id="bio">
                <h5>E-mail</h5>
                <p class="card-text text-center">{{ $user->email }}</p>
                        <h5>Bemutatkozás</h5>
                        <p class="card-text text-center">{{ $user->bemutatkozas }}</p>
                        <h5>Lakhely</h5>
                        <p class="card-text text-center">{{ $user->lakhely }}</p>
                        <h5>Születési dátum</h5>
                        <p class="card-text text-center">{{ $user->szulev }}</p>
                        <h5>Neme</h5>
                        <p class="card-text text-center">{{ $user->neme }}</p>
                </div>
            
            </div>
            <div class="col-md">
            <div class="card">
            </div>


            </div>
            <div class="col-md-2">
            <div class="card">
            <p>valami szöveg</p>
            </div>


            </div>
        </div>
    </div>
</x-app-layout>