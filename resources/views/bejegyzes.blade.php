<div class="p-4 mb-4" id="bejegyzesletrehozas">
    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
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
                    <img src="{{ asset('pics/imageicon.png') }}" alt="File Upload" width="30">
                    <input type="file" id="fileUpload" accept="image" name="filetoupload" style="display: none;">
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
<div class="card p-2" id="bejegyzes">
    <div class="card-header ">
        <img src="{{ URL::asset('user/'.$post->name.'/'.$post->profilkep) }}" alt="" style="border-radius:100%; margin-right:10px;" height="35px" width="auto">  <a href="profil/{{$post -> username}}" style="text-decoration: none; color: var(--betuszin);" class="syne-bold">{{$post -> name}}</a>      <span class="bejegyzespostolva">Posztolva: {{$post -> updated_at}}</span>

    </div>
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('user/'.$post -> imagepath) }}" alt="{{ asset('user/'.$post -> imagepath) }}" class="img-fluid bejegyzeskep">
        </div>
        <div class="col-md-6">
            <div class="bejegyzesjobboldal">
                <h5 class="bejegyzescim">{{$post -> title}}</h5>
                <p>{{ $post -> context }}</p>
               
            </div>
        </div>
    </div>
  
</div>
@endforeach
