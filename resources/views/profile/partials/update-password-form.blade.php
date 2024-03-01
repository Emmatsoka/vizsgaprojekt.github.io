<section class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <header class="mb-4">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Jelszó frissítése') }}
                </h2>
                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Biztosítsa, hogy fiókja hosszú és véletlenszerű jelszót használjon a biztonság érdekében.') }}
                </p>
            </header>

            <form method="post" action="{{ route('password.update') }}" class="mt-6">
                @csrf
                @method('put')

                <!-- Jelenlegi jelszó mező -->
                <div class="mb-3">
                    <label for="update_password_current_password" class="form-label">{{ __('Jelenlegi jelszó') }}</label>
                    <input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password">
                    @error('current_password', 'updatePassword')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Új jelszó mező -->
                <div class="mb-3">
                    <label for="update_password_password" class="form-label">{{ __('Új jelszó') }}</label>
                    <input id="update_password_password" name="password" type="password" class="form-control" autocomplete="new-password">
                    @error('password', 'updatePassword')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Új jelszó megerősítése mező -->
                <div class="mb-3">
                    <label for="update_password_password_confirmation" class="form-label">{{ __('Jelszó megerősítése') }}</label>
                    <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password">
                    @error('password_confirmation', 'updatePassword')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Mentés gomb -->
                <div class="mb-3 d-grid">
                    <button type="submit" class="gomb feketehtr mx-auto w-100">{{ __('Mentés') }}</button>
                    <!-- Jelszó frissítés állapota -->
                    @if (session('status') === 'password-updated')
                        <div
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600 mt-2"
                        >{{ __('Mentve.') }}</div>
                    @endif
                </div>
            </form>
        </div>
    </div>
</section>
