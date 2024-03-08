<x-app-layout>
  
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <img src="{{ asset('user/' . $user->boritokep) }}" class="card-img-top" alt="Borítókép">
                    <img src="{{ asset('user/' . $user->profilkep) }}" class="card-img-top" alt="Profilkép">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $user->name }}</h5>
                        <p class="card-text text-center">{{ $user->email }}</p>
                        <p class="card-text text-center">{{ $user->bemutatkozas }}</p>
                        <p class="card-text text-center">{{ $user->lakhely }}</p>
                        <p class="card-text text-center">{{ $user->szulev }}</p>
                        <p class="card-text text-center">{{ $user->neme }}</p>
                        <!-- Itt megjelenítheted a többi adatot a create_users táblából -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>