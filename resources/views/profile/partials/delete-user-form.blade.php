<section class="container fioktorlese">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <header class="mb-4">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Fiók törlése') }}
                </h2>
                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Miután törölte fiókját, az összes erőforrását és adatát véglegesen törölni fogjuk. Mielőtt fiókját törli, kérjük, töltsön le minden adatot vagy információt, amelyet meg kíván őrizni.') }}
                </p>
            </header>

            <!-- Fiók törlése gomb -->
            <button type="button" class="gomb feketehtr" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
                {{ __('❌ Fiók törlése') }}
            </button>

            <!-- Megerősítő modális ablak -->
            <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="post" action="{{ route('profile.destroy') }}">
                            @csrf
                            @method('delete')

                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmDeleteModalLabel">{{ __('Törlés megerősítése') }}</h5>
                                <button type="button" class="" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <p>{{ __('Biztosan törölni szeretné fiókját?') }}</p>
                                <p>{{ __('Miután törölte fiókját, az összes erőforrását és adatát véglegesen törölni fogjuk. Kérjük, adja meg jelszavát a fiók végleges törlésének megerősítéséhez.') }}</p>

                                <!-- Jelszó mező -->
                                <div class="mt-3">
                                    <label for="password" class="form-label">{{ __('Jelszó') }}</label>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="{{ __('Jelszó') }}">
                                    @error('password', 'userDeletion')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Mégse') }}</button>
                                <button type="submit" class="btn btn-danger">{{ __(' Fiók törlése') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
