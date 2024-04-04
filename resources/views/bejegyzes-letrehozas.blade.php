<div class="p-4 mb-4" id="bejegyzesletrehozas">
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="name" value="{{ Auth::user()->name }}">
        <input type="hidden" name="username" value="{{ Auth::user()->username }}">
        <div class="mb-3 row align-items-center">
            <!-- Profilkép megjelenítése -->
            <div class="col-auto me-3">
                <img src="{{ URL::asset('user/' . Auth::user()->profilkep) }}" alt="Profilkép" width="70px" height="70px" id="bejegyzesprofilkep">
            </div>
            <!-- Cím input mező -->
            <div class="col">
                <input type="text" class="form-control" id="postTitle" placeholder="Mi legyen a címe?" name="titletoupload" maxlength="255" required>
            </div>
        </div>
        <div class="mb-3 row align-items-center">
            <!-- Szöveges input mező -->
            <div class="col">
                <textarea class="form-control" id="postContent" name="contexttoupload" placeholder="Mi jár a fejedben?" rows="3" maxlength="1000" required></textarea>
            </div>
        </div>
        <!-- Képfeltöltés ikon -->
        <div class="mb-3 bejegyzesletrehozasgombok">
            <label for="imageUpload" class="upload-icon invertalt">
                <img src="{{ asset('pics/imageicon.png') }}" alt="Image Upload" width="30">
                <input type="file" id="imageUpload" accept="image/*" name="filetoupload" style="display: none;" multiple>
            </label>
            <button type="submit" class="gomb feketehtr" style="float:right; display:block;">Létrehozás</button>
        </div>
        <div class="row mb-3">
            <div class="col">

            </div>
        </div>
    </form>
</div>
