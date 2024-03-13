
<x-app-layout>
   
    <x-slot name="header">
        <h2 class="p-3 font-semibold text-white leading-tight text-center syne-bold" >
            {{ __('Profil') }}
        </h2>
    </x-slot>

    <div class="py-12 mb-4 p-2 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md">
                    <div class="p-4 sm:p-8 text-white   mb-4 profilszerkesztes">
                        <div class="max-w-xl ">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                    </div>
                    <div class="col-md">
                    <div class="p-4 sm:p-8 text-white  mb-4 profilszerkesztes">
                        <div class="max-w-xl ">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>
                    <div class="p-4 sm:p-8 text-white profilszerkesztes" >
                        <div class="max-w-xl ">
                            @include('profile.partials.delete-user-form')
                        </div>
                        </div>
                    </div>
             
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
