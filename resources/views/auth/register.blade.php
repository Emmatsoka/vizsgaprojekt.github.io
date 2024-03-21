<title>Wesoc | Regisztráció</title>
<x-guest-layout>
    <div class="htr">
        <a href="{{ url('fooldal') }}"><img src="Wesoc_logo_white_png.png" height="auto" width="140px" id="logo"></a>
    <form method="POST" action="{{ route('register') }}" id="regisztraciosform">
        @csrf
        <h1>Regisztráció</h1>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('NÉV')" /><br>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="pl: John Doe"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="username" :value="__('FELHASZNÁLÓNÉV')" /><br>
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" placeholder="pl: valaminev"/>
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('EMAIL')" /><br>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required  placeholder="pl: valaminev@gmail.com"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="szulev" :value="__('SZÜLETÉSI ÉV')" /><br>
            <x-text-input id="szulev" class="block mt-1 w-full" type="date" name="szulev" :value="old('szulev')" required />
            <x-input-error :messages="$errors->get('szulev')" class="mt-2" />
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
            <x-input-label for="password_confirmation" :value="__('JELSZÓ MÉG X1')" /><br>

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <div class="block mt-4">
            <label for="gdpr" class="inline-flex items-center">
                <input id="gdpr" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="gdpr">
                <span class="ms-2 text-sm text-gray-600">Elolvastam, és elfogadom a <b>Wesoc Adatvédelmi Szabályzatot</b>.</span>
              
            </label>
            <x-input-error :messages="$errors->get('gdpr')" class="mt-2" />
        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Már regisztráltál?') }}
            </a>

            <button>
                {{ __('Regisztrálok') }}
            </button>
        </div>
    </form>
    </div>
</x-guest-layout>
