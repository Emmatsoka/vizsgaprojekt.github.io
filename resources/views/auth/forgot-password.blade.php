<title>Wesoc | Elfeledett jelszó</title>
<x-guest-layout>
    <div class="htr">


    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <a href="{{ url('fooldal') }}"><img src="Wesoc_logo_white_png.png" height="auto" width="140px" id="logo"></a>
    <form method="POST" action="{{ route('password.email') }}" id="elfelejtettjelszoform">
        @csrf
        <h1>Elfelejtett jelszó</h1>
      
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email jelszó reset link  ') }}
            </x-primary-button>
        </div>
    </form>
    </div>
</x-guest-layout>
