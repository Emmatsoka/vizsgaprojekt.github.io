<div class="p-4 mb-4" id="bejegyzesletrehozas">
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 row align-items-center">
            <!-- Profilkép megjelenítése -->
            <div class="col-auto me-3">
                <img src="{{ URL::asset('user/' . Auth::user()->profilkep) }}" alt="Profilkép" width="45px" height="45px" id="bejegyzesprofilkep">
            </div>
            <!-- Cím input mező -->
            <div class="col">
                <textarea class="form-control" id="postContent" name="contexttoupload" placeholder="Mi jár a fejedben? 👀" rows="2" maxlength="1000" required></textarea>
            </div>
        </div>

        <!-- Képfeltöltés ikon -->
        <div class=" mb-3 ">
            <label for="imageUpload" class="upload-icon invertalt">
                <img src="{{ asset('pics/imageicon.png') }}" alt="Image Upload" width="25px">
                <input type="file" id="imageUpload" accept="image/*" name="filetoupload" style="display: none;" multiple>
            </label>
            <button type="submit" class="gomb feketehtr" style="float:right; display:block;">Küldés</button>
        </div>

    </form>
</div>
