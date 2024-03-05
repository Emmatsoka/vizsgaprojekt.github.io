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

                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('Név') }}</label>
                    <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('Profilkép') }}</label>
                    <img src="{{URL::asset('user/'.Auth::user()->profilkep)}}" alt="" srcset="" class="img-fluid">
                    <input id="avatar" type="file" class="form-control" name="profilkep" value="{{ old('profilkep') }}" required autocomplete="avatar">
                     
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('E-mail') }}</label>
                    <input id="email" name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" required autocomplete="username">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

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

                <div class="mb-3 d-grid">
                    <button type="submit" class="gomb feketehtr mx-auto w-100">{{ __('Mentés') }}</button>

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
