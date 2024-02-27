<title>Wesoc | Bejelentkezés</title>
<x-guest-layout>
  
        <div class="htr">
    <!-- Session Status -->
    <x-auth-session-status  :status="session('status')" />
    <a href="{{ url('fooldal') }}"><img src="Wesoc_logo_white_png.png" height="auto" width="140px" id="logo"> </a>
    <form method="POST" action="{{ route('login') }}" id="bejelentkezesform">
        @csrf
        <h1>Bejelentkezés</h1>
        <!-- Email Address -->
        <div>
            <label for="email">EMAIL</label><br>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password">JELSZÓ</label><br>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Jegyezz meg') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Elfelejtetted a jelszavad?') }}
                </a>
            @endif
                <br>
            <button >
                {{ __('Bejelentkezés') }}
            </button>
        </div>
       
    </form>
    </div>
</x-guest-layout>
