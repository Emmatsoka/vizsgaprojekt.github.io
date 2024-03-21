<div class="p-4 mb-4" id="bejegyzesletrehozas">

    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 d-flex align-items-center">
            <!-- Profilkép megjelenítése -->
            
            <div class="me-3">
                <img src="{{URL::asset('user/'.Auth::user()->profilkep)}}" alt="Profilkép" width="70px" height="70px" id="bejegyzesprofilkep">
            </div>
           
            <!-- Szöveges input mező -->
            <textarea class="form-control flex-grow-1" id="postContent" name="postContent" placeholder="Mi jár a fejedben?" rows="3" required></textarea>
        </div>
        <button type="submit" class="gomb feketehtr">Létrehozás</button>
        <!-- Ikonsor a fájlok feltöltéséhez -->
        <div class="mb-3 d-flex " id="itemek">
            <!-- Képfeltöltés ikon -->
            <label for="imageUpload" class="upload-icon invertalt">
                <img src="{{ asset('pics/imageicon.png') }}" alt="Image Upload" width="30">
                
                <input type="file" id="imageUpload" accept="image/*" name="imageUpload" style="display: none;">
            </label>
            
            <!-- Fájlfeltöltés ikon -->
            <label for="fileUpload" class="upload-icon invertalt">
                <img src="{{ asset('pics/fileicon.png') }}" alt="File Upload" width="30">
                <input type="file" id="fileUpload" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx" name="fileUpload" style="display: none;">
            </label>
            
            <!-- Videófeltöltés ikon -->
            <label for="videoUpload" class="upload-icon invertalt">
                <img src="{{ asset('pics/videoicon.png') }}" alt="Video Upload" width="30">
                <input type="file" id="videoUpload" accept="video/*" name="videoUpload" style="display: none;">
            </label>
        </div>
        
        
    </form>
</div>
