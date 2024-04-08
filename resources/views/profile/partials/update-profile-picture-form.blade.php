<section class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <header class="mb-4">
                <h2 class="text-lg font-medium ">
                    {{ __('Profilkép/Borítókép frissítése') }}
                </h2>
                <p class="mt-1 text-sm ">
                    {{ __("Frissítse fiókja profilképét és borítóképét.") }}
                </p>
            </header>

            <form id="send-verification" method="post" action="{{ route('verification.send') }}"  >
                @csrf
            </form>

            <form method="post" action="{{ route('profile.profilkep') }}" class="mt-6" enctype="multipart/form-data">
                @csrf
                @method('patch')


                <!-- Profil és borítókép -->
                <div class="mb-3">
                    <label for="profilkep" class="form-label">{{ __('📸 Profilkép') }}</label>
                    <input type="file" accept="image/*" class="form-control" name="profilkep">
                    @error('profilkep')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="boritokep" class="form-label">{{ __('📺 Borítókép') }}</label>
                    <input type="file" accept="image/*" class="form-control" name="boritokep">
                    @error('boritokep')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>



                <!-- Mentés gomb -->
                <div class="mb-3 d-grid">
                    <button type="submit" class="gomb feketehtr mx-auto w-100">{{ __('Mentés') }}</button>

                    <!-- Profil frissítve üzenet -->
                    @if (session('status') === 'profile-updated')
                        <div class="mentve">{{ __('Mentve.') }}</div>
                    @endif
                </div>
            </form>

        </div>
    </div>
</section>
