

@foreach($data->sortByDesc('created_at') as $post)
    <div class="card p-2" id="bejegyzes">
        <div class="card-header">
            <img src="{{ asset('user/'.$post->user->profilkep) }}" alt="" style="border-radius:100%; margin-right:10px;" height="45px" width="auto">
            <a href="profil/{{$post->user->username}}" style="text-decoration: none; color: var(--betuszin);" class="syne-bold">{{$post->user->name}}</a>
            <span class="bejegyzespostolva">Posztolva: {{$post->created_at}}</span>
        </div>
        <div class="row">
            <div class="col-md">
                <div >
                    <h5 class="bejegyzescim syne-bold">{{$post->title}}</h5>
                    <p class="bejegyzestartalom ">{{ $post->context }}</p>
                </div>
                @if(!empty($post->imagepath))
                <img src="{{ asset('user/'.$post->imagepath) }}" alt="{{ asset('user/'.$post->imagepath) }}" class="img-fluid bejegyzeskep">
                @endif
            </div>
        </div>
        <div>
            @if(Auth::check() && (Auth::user()->id === $post->user->id || Auth::user()->admin))
            <a href="{{ route('post.edit', $post->id) }}" class="gomb feherhtr float-start">Szerkesztés</a>
                <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="gomb feherhtr float-end">Törlés</button>
                </form>
            @endif
        </div>
    </div>
@endforeach

