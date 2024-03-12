<section class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <header class="mb-4">
                <h2 class="text-lg font-medium text-dark">
                    {{ __('Bemutatkozás frissítése') }}
                </h2>
                <p class="mt-1 text-sm text-dark">
                    {{ __("Frissítse fiókja profilinformációit és e-mail címét.") }}
                </p>
            </header>

         

            <form method="post" action="{{ route('profile.update') }}" class="mt-6" >
                @csrf
                @method('patch')

               
                
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
