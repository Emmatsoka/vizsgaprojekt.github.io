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
                    <label for="profilkep" class="form-label">{{ __('Profilkép') }}</label>
                    <img src="{{ URL::asset('user/' . Auth::user()->profilkep) }}" alt="" srcset="" class="img-fluid">
                    <input id="profilkep" type="file" class="form-control" name="profilkep" value="{{ old('profilkep') }}" required autocomplete="avatar">
                    
                    @error('profilkep')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                 
  
    <div class="mb-3">
                    <label for="boritokep" class="form-label">{{ __('Borítókép') }}</label>
                    <img src="{{ URL::asset('user/' . Auth::user()->boritokep) }}" alt="" srcset="" class="img-fluid">
                    <input id="boritokep" type="file" class="form-control" name="boritokep" value="{{ old('boritokep') }}" required autocomplete="avatar">
                    
                    @error('profilkep')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
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
