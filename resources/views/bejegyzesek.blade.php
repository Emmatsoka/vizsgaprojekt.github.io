<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

@foreach($data->sortByDesc('created_at') as $post)
    <div class="card p-2" id="bejegyzes">
        <div class="card-header">
            <img src="{{ asset('user/'.$post->user->profilkep) }}" alt="" style="border-radius:100%; margin-right:10px;" height="50px" width="auto">
            <ul class="bejegyzesnev">
                <li><a href="profil/{{$post->user->username}}" style="text-decoration: none; color: var(--betuszin);" class="syne-bold">{{$post->user->name}}   </a></li>
                <li><span class="bejegyzespostolva">{{$post->created_at}}</span></li>
            </ul>
            @if(Auth::check() && (Auth::user()->id === $post->user->id || Auth::user()->admin))
            <div class="bejegyzesgombok">

                <div class="dropdown  ">
                    <a class=" drpdwn attunes " href="#" role="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        . . .
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li> <a href="{{ route('post.edit', $post->id) }}"  class=" dropdown-item">📑 Szerkesztés</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><form action="{{ route('post.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="dropdown-item">❌ Törlés</button>
                        </form></li>
                    </ul>
            </div>
        </div>
        @endif
        </div>

        <div class="row">
            <div class="col-md">
                <div >

                    <p class="bejegyzestartalom ">{{ $post->context }}</p>
                </div>
                @if(!empty($post->imagepath))
                <img src="{{ asset('user/'.$post->imagepath) }}" alt="{{ asset('user/'.$post->imagepath) }}" class="img-fluid bejegyzeskep">
                @endif
            </div>

        <div class=" justify-content-between  mb-3">

                <form action="{{ route('like.add') }}" method="POST" class="like-gomb ">
                    @csrf
                    <input type="hidden" name="postId" value="{{ $post->id }}">
                    <button type="submit" class="gomb feherhtr">👍 {{ $post->likes()->where('post_id', $post->id)->count() }}</button>
                </form>
                <form action="{{ route('like.remove') }}" method="POST"  class="like-gomb">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="postId" value="{{ $post->id }}">
                    <button type="submit" class="gomb feherhtr">👎</button>
                </form>



        </div>
        </div>
    </div>

@endforeach

@if($data->total() > 5)
<div class="row justify-content-center">
    <div class="col-md-4">
        <ul class="custom-pagination">
            @if ($data->onFirstPage())
                <li class="disabled"><span>← Előző</span></li>
            @else
                <li><a href="{{ $data->appends(request()->input())->previousPageUrl() }}">← Előző</a></li>
            @endif
            <!-- Számok a lapokhoz -->
            @for ($i = 1; $i <= $data->lastPage(); $i++)
                @if ($i == $data->currentPage())
                    <li class="aktivoldal"><span>{{ $i }}</span></li>
                @else
                    <li><a href="{{ $data->url($i) }}">{{ $i }}</a></li>
                @endif
            @endfor
            <!-- Következő gomb -->
            @if ($data->hasMorePages())
                <li><a href="{{ $data->appends(request()->input())->nextPageUrl() }}">Következő →</a></li>
            @else
                <li class="disabled"><span>Következő →</span></li>
            @endif
        </ul>
    </div>
</div>
@endif
