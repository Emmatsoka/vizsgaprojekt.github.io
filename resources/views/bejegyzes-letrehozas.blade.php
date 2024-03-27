<div class="p-4 mb-4" id="bejegyzesletrehozas">
    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 row align-items-center">
            <!-- Profilkép megjelenítése -->
            <div class="col-auto me-3">
                <img src="{{ URL::asset('user/' . Auth::user()->profilkep) }}" alt="Profilkép" width="70px" height="70px" id="bejegyzesprofilkep">
            </div>
            <!-- Cím input mező -->
            <div class="col">
                <input type="text" class="form-control" id="postTitle" placeholder="Mi legyen a címe?" name="titletoupload" placeholder="Bejegyzés címe" required>
            </div>
        </div>
        <div class="mb-3 row align-items-center">
            <!-- Szöveges input mező -->
            <div class="col">
                <textarea class="form-control" id="postContent" name="contexttoupload" placeholder="Mi jár a fejedben?" rows="3" required></textarea>
            </div>
        </div>
        <!-- Ikonsor a fájlok feltöltéséhez -->
        <div class="row mb-3" id="itemek">
            <!-- Képfeltöltés ikon -->
            <div class="col">
                <label for="imageUpload" class="upload-icon invertalt">
                    <img src="{{ asset('pics/imageicon.png') }}" alt="Image Upload" width="30">
                    <input type="file" id="imageUpload" accept="image/*" name="filetoupload" style="display: none;">
                </label>
            </div>
            <!-- Fájlfeltöltés ikon -->
            <div class="col">
                <label for="fileUpload" class="upload-icon invertalt">
                    <img src="{{ asset('pics/fileicon.png') }}" alt="File Upload" width="30">
                    <input type="file" id="fileUpload" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx" name="filetoupload" style="display: none;">
                </label>
            </div>
            <!-- Videófeltöltés ikon -->
            <div class="col">
                <label for="videoUpload" class="upload-icon invertalt">
                    <img src="{{ asset('pics/videoicon.png') }}" alt="Video Upload" width="30">
                    <input type="file" id="videoUpload" accept="video/*" name="filetoupload" style="display: none;">
                </label>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" class="gomb feketehtr">Létrehozás</button>
            </div>
        </div>
    </form>
</div>
