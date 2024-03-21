
<x-app-layout>
   
    <x-slot name="header">
        <h1 class="p-3 font-semibold leading-tight text-center " >
            {{ __('#PROFILFRISSÍTÉS') }}
        </h1>
    </x-slot>

    <div class="py-12 mb-4 p-2 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="p-4 sm:p-8   mb-4 profilszerkesztes">
                        <div class="max-w-xl ">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                    </div>
                    <div class="col-md-5">
                        <div class="p-4 sm:p-8   mb-4 profilszerkesztes">
                            <div class="max-w-xl ">
                                @include('profile.partials.update-profile-picture-form')
                            </div>
                        </div>
                        </div>
        
                    </div>
             
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
