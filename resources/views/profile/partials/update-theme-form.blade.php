<section class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <header class="mb-4">
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Oldal színtémák') }}
            </h2>
            <p class="mt-1 text-sm text-gray-600">
                {{ __('Kattints az egyik színre az oldal színtémájának kiválasztásához.') }}
            </p>
        </header>

            <form id="themeForm" method="POST" action="{{ route('tema') }}" class="mb-3">
                @csrf
                <div class="mb-3">
                    <label for="tema" class="form-label">{{ __('Válassz témát:') }}</label>
                    <div>
                        <button id="feherTema" type="submit" name="tema" value="feher-tema" class="tema-gomb">Világos téma</button>
                        <button id="atlatszoTema" type="submit" name="tema" value="alap-tema" class="tema-gomb">Alap téma</button>
                        <button id="alapTema"  type="submit" name="tema" value="sotetkek-tema" class="tema-gomb">Sötétkék téma</button>
                        <button id="pirosTema" type="submit" name="tema" value="piros-tema" class="tema-gomb">Piros téma</button>
                        <button id="sargaTema" type="submit" name="tema" value="sarga-tema" class="tema-gomb">Sárga téma</button>
                        <button id="lilaTema" type="submit" name="tema" value="lila-tema" class="tema-gomb">Lila téma</button>
                        <button id="zoldTema" type="submit" name="tema" value="zold-tema" class="tema-gomb">Zöld téma</button>

                    </div>

        </div>
    </div>
    </div>
</section>
