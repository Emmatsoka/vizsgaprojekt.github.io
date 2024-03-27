<div class="p-4 mb-4" id="bejegyzesletrehozas">
    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="name" value="{{ Auth::user()->name }}">
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
     
         
            <!-- Fájlfeltöltés ikon -->
            <div class="col">
                <label for="fileUpload" class="upload-icon invertalt">
                    <img src="{{ asset('pics/fileicon.png') }}" alt="File Upload" width="30">
                    <input type="file" id="fileUpload" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx" name="filetoupload" style="display: none;">
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

@foreach($data as $post)
<div class="card  mb-4 p-2 mt-4" id="bejegyzes">
    <div class="card-header syne-bold">
        <img src="{{URL::asset('user/'.Auth::user()->profilkep)}}" alt="" style="border-radius:100%; margin-right:10px;" height="35px" width="auto">  <a href="{{$post -> name}}" style="text-decoration: none; color: var(--betuszin);">{{ Auth::user()->name}}</a> 
    </div>
    <div class="card-body">
        <h5>{{$post -> title}}</h5>
            <img src="{{ asset('user/'.$post -> imagepath) }}" alt="{{ asset('user/'.$post -> imagepath) }}" width="300px" height="200px" class="img-fluid">
        </div>
        <div>
            <p>{{ $post -> context }}</p>
            <span>Posztolva: {{$post -> updated_at}}</span>
            <span>Postolta: {{$post -> name}}</span>
        </div>
    </div>
</div>
@endforeach
