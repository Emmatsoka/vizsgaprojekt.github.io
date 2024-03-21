
<div class="card  mb-4 p-2 mt-4" id="bejegyzes">
    <div class="card-header syne-bold">
        <img src="{{URL::asset('user/'.Auth::user()->profilkep)}}" alt="" style="border-radius:100%; margin-right:10px;" height="35px" width="auto">  <a href="{{ route('profil', ['username' => Auth::user()->username]) }}" style="text-decoration: none; color: var(--betuszin);">Felhasználónév</a> {{ $i }}
    </div>
    <div class="card-body">
 
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ad asperiores quisquam deleniti minima autem, vero eum enim sint possimus, tempora cupiditate eos distinctio quidem, incidunt voluptates? In, provident voluptates. {{ $i }}
    </div>
</div>
