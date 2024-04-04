<x-app-layout>

        <h1 class="p-3 font-semibold leading-tight text-center " >
            {{ __('#BEJEGYZÉS SZERKESZTÉSE') }}
        </h1>

    <section class="container">
        <div class="row justify-content-center">
        <div class="col-md-8">
            <header class="mb-4">
<div class=" m-4 p-4 mb-4" id="bejegyzesletrehozas">
    <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3 row align-items-center">
            <!-- Profilkép megjelenítése -->
            <div class="col-auto me-3">
                <img src="{{ URL::asset('user/' . Auth::user()->profilkep) }}" alt="Profilkép" width="70px" height="70px" id="bejegyzesprofilkep">
            </div>
            <!-- Cím input mező -->
            <div class="col">
                <input type="text" class="form-control" id="postTitle" placeholder="Mi legyen a címe?" name="titletoupload" value="{{ $post->title }}" required>
            </div>
        </div>
        <div class="mb-3 row align-items-center">
            <!-- Szöveges input mező -->
            <div class="col">
                <textarea class="form-control" id="postContent" name="contexttoupload" placeholder="Mi jár a fejedben?" rows="3" required>{{ $post->context }}</textarea>
            </div>
        </div>
        <!-- Képfeltöltés ikon -->
        <div class="mb-3">
            <label for="imageUpload" class="upload-icon invertalt">
                <img src="{{ asset('pics/imageicon.png') }}" alt="Image Upload" width="30">
                <input type="file" id="imageUpload" accept="image/*" name="filetoupload" style="display: none;">
            </label>
        </div>
        @if(!empty($post->imagepath))
        <img src="{{ asset('user/'.$post->imagepath) }}" alt="{{ asset('user/'.$post->imagepath) }}" class="img-fluid bejegyzeskep">
        @endif
        <div class="row mb-3">
            <div class="col">
                <button type="submit" class="gomb feketehtr">Mentés</button>
            </div>
        </div>
    </form>
</header>
        </div>
        </div>
    </section>
</div>
</x-app-layout>

