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
                <img src="{{ URL::asset('user/' . Auth::user()->profilkep) }}" alt="Profilkép" width="45px" height="45px" id="bejegyzesprofilkep">
            </div>
            <!-- Cím input mező -->
            <div class="col">
                <input type="text" class="form-control" value="{{ $post->title}}" id="postTitle" placeholder="Mi legyen a címe?" name="titletoupload" maxlength="255" required>
            </div>
        </div>
        <div class="mb-3 row align-items-center">
            <div class="col">
                <textarea class="form-control" id="postContent" name="contexttoupload" placeholder="Mi jár a fejedben? 👀" rows="2" maxlength="1000" required>{{ $post->context}}</textarea>
            </div>
        </div>

        <!-- Képfeltöltés ikon -->
        <div class="mb-3">
            <label for="imageUpload" class="upload-icon invertalt">
                <img src="{{ asset('pics/fileicon.png') }}" alt="Image Upload" width="30">
                <input type="file" id="imageUpload" accept="image/*" name="filetoupload" style="display: none;">
            </label>
        </div>
        @if(!empty($post->filepath))
        @php
            $fileExtension = pathinfo($post->filepath, PATHINFO_EXTENSION);
        @endphp

        @if(in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif']))
            <img src="{{ asset($post->filepath) }}" alt="{{ $post->filepath }}" class="img-fluid bejegyzeskep">
        @elseif(in_array($fileExtension, ['mp4', 'mkv', 'avi','mov','webm']))
            <video controls class="img-fluid bejegyzeskep">
                <source src="{{ asset($post->filepath) }}" type="video/mp4">
                A böngésződ nem támogatja a videót.
            </video>
            @elseif(in_array($fileExtension, ['mp3', 'wav', 'flac']))
            <audio controls class=" bejegyzeskep">
                <source src="{{ asset($post->filepath) }}" type="audio/mp3">
                A böngésződ nem támogatja az audiót.
            </audio>

        @endif
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

