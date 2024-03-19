<section class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <header class="mb-4">
                <h2 class="text-lg font-medium text-dark">
                    {{ __('Profil frissítése') }}
                </h2>
                <p class="mt-1 text-sm text-dark">
                    {{ __("Frissítse fiókja profilinformációit és e-mail címét.") }}
                </p>
            </header>

            <form id="send-verification" method="post" action="{{ route('verification.send') }}"  >
                @csrf
            </form>

            <form method="post" action="{{ route('profile.update') }}" class="mt-6" enctype="multipart/form-data">
                @csrf
                @method('patch')
            
                <!-- Név -->
                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('Név') }}</label>
                    <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            
                <!-- Bemutatkozás -->
                <div class="mb-3">
                    <label for="bemutatkozas" class="form-label">{{ __('Bemutatkozás') }}</label>
                    <textarea id="bemutatkozas" name="bemutatkozas" class="form-control" rows="4">{{ old('bemutatkozas', $user->bemutatkozas) }}</textarea>
                    @error('bemutatkozas')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror 
                </div>
            
                <!-- Nem -->
                <div class="mb-3">
                    <label for="neme" class="form-label">{{ __('Nem') }}</label>
                    <select id="neme" name="neme" class="form-control" required autocomplete="neme">
                        <option value="férfi" {{ old('neme', $user->neme) === 'férfi' ? 'selected' : '' }}>Férfi</option>
                        <option value="nő" {{ old('neme', $user->neme) === 'nő' ? 'selected' : '' }}>Nő</option>
                        <option value="egyéb" {{ old('neme', $user->neme) === 'egyéb' ? 'selected' : '' }}>Egyéb</option>
                    </select>
                    @error('neme')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            
                <!-- Lakhely -->
                <div class="mb-3">
                    <label for="lakhely" class="form-label">{{ __('Lakhely') }}</label>
                    <input id="lakhely" name="lakhely" type="text" class="form-control" value="{{ old('lakhely', $user->lakhely) }}" autocomplete="lakhely">
                    @error('lakhely')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            
                <!-- Születési dátum -->
                <div class="mb-3">
                    <label for="szulev" class="form-label">{{ __('Születési dátum') }}</label>
                    <input id="szulev" name="szulev" type="date" class="form-control" value="{{ old('szulev', $user->szulev) }}" autocomplete="szulev">
                    @error('szulev')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            
                <!-- Profil és borítókép -->
                <div class="mb-3">
                    <label for="profilkep" class="form-label">{{ __('Profilkép') }}</label>
                    <input type="file" class="form-control" name="profilkep">
                    @error('profilkep')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="boritokep" class="form-label">{{ __('Borítókép') }}</label>
                    <input type="file" class="form-control" name="boritokep">
                    @error('boritokep')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('E-mail') }}</label>
                    <input id="email" name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" required autocomplete="email">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
            
                    <!-- E-mail ellenőrzés -->
                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div class="mt-2">
                            <p class="text-sm text-dark">
                                {{ __('Az Ön e-mail címe nincs ellenőrizve.') }}
            
                                <button form="send-verification" class="btn btn-link">
                                    {{ __('Kattintson ide az ellenőrző e-mail újraküldéséhez.') }}
                                </button>
                            </p>
            
                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 text-sm text-success">
                                    {{ __('Az új ellenőrző linket elküldtük az Ön e-mail címére.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>
            
                <!-- Mentés gomb -->
                <div class="mb-3 d-grid">
                    <button type="submit" class="gomb feketehtr mx-auto w-100">{{ __('Mentés') }}</button>
            
                    <!-- Profil frissítve üzenet -->
                    @if (session('status') === 'profile-updated')
                        <div
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-dark mt-2"
                        >{{ __('Mentve.') }}</div>
                    @endif
                </div>
            </form>
            
        </div>
    </div>
</section>
