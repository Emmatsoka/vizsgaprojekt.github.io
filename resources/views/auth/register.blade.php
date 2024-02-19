<title>Wesoc | Regisztráció</title>
<x-guest-layout>
    <div class="htr">
        <img src="Wesoc_logo_white_png.png" height="auto" width="140px" id="logo">
    <form method="POST" action="{{ route('register') }}" id="regisztraciosform">
        @csrf
        <h1>Regisztráció</h1>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('NÉV')" /><br>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('EMAIL')" /><br>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('JELSZÓ')" /><br>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('JELSZÓ MÉG1X')" /><br>

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Már regisztráltál?') }}
            </a>

            <x-primary-button>
                {{ __('Regisztrálok') }}
            </x-primary-button>
        </div>
    </form>
    </div>
</x-guest-layout>
