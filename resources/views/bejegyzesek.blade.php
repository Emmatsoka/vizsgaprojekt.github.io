

@foreach($data->sortByDesc('created_at') as $post)
    <div class="card p-2" id="bejegyzes">
        <div class="card-header">
            <img src="{{ asset('user/'.$post->user->profilkep) }}" alt="" style="border-radius:100%; margin-right:10px;" height="50px" width="50px">
            <ul class="bejegyzesnev">
                <li><a href="profil/{{$post->user->username}}" style="text-decoration: none; color: var(--betuszin);" class="syne-bold">{{$post->user->name}}   </a></li>
                <li><span class="bejegyzespostolva">{{$post->created_at->diffForHumans()}}</span></li>
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
                    <h5 class="bejegyzescim syne-bold">{{$post->title}}</h5>
                    <p class="bejegyzestartalom ">{{ $post->context }}</p>
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
            </div>

        <div class=" justify-content-between  mb-3">

            <form id="likeForm" data-post-id="{{ $post->id }}" class="like-gomb">
                @csrf
                <input type="hidden" name="postId" value="{{ $post->id }}">
                <button type="button" class="gomb feherhtr like-button">
                    <span class="emoji-icon">@if($post->likedByUser()) ❤️ @else 🤍 @endif</span>
                    <span id="likeCount">{{ $post->likes()->where('post_id', $post->id)->count() }}</span>
                </button>
            </form>


            <button class="gomb feherhtr comment-toggle-btn" onclick="hozzaszolasok(this)" >💬 {{ $post->comments()->count() }}</button>
        </div>

        <div class="comments-section inactive" >

            <ul class="comment-list">
                @if(!($post->comments->isEmpty()))
                @foreach ($post->comments as $comment)
                <li class="comment-item">
                    <div class="comment-content">
                        <a href="profil/{{$comment->user->username}}">
                        <img src="{{ asset('user/'.$comment->user->profilkep) }}" alt="" style="border-radius:100%; margin-right:10px;" height="30px" width="30px">
                        <strong class="comment-author">{{ $comment->user->name }}</strong> </a> <small class="bejegyzespostolva">{{ $comment->created_at->diffForHumans() }}</small>
                        <p class="comment-text">{{ $comment->content }}  @if(Auth::check() && (Auth::user()->id === $comment->user->id || Auth::user()->admin))

                            <div class="commentgombok">
                            <div class="dropdown  ">
                                <a class=" drpdwn attunes " href="#" role="button"  data-bs-toggle="dropdown" aria-expanded="false">
                                    . . .
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" >
                                    <li>
                                        <form action="{{ route('comment.destroy', $comment->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"  class="dropdown-item">❌ Törlés</button>
                                        </form>
                                    </li>
                                </ul>
                        </div>
                    </div>

                            @endif </p>

                    </div>
                </li>
                @endforeach
                @else
                <p class="none-comment">Nincsenek hozzászólások</p>
                @endif
            </ul>
        </div>

        <form action="{{ route('comment.store') }}" method="POST" class="hozzaszolasform">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <div class="mb-2  align-items-center">
            <textarea name="content" class="comment-input" placeholder="Írj egy új hozzászólást..." rows="1"></textarea>
            </div>
            <button type="submit" class="comment-gomb" style="float:right; display:block;"><img src="{{ asset('pics/send.png') }}" height="auto" class="invertalt" width="25px"></button>
        </form>
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

            @for ($i = 1; $i <= $data->lastPage(); $i++)
                @if ($i == $data->currentPage())
                    <li class="aktivoldal"><span>{{ $i }}</span></li>
                @else
                    <li><a href="{{ $data->url($i) }}">{{ $i }}</a></li>
                @endif
            @endfor

            @if ($data->hasMorePages())
                <li><a href="{{ $data->appends(request()->input())->nextPageUrl() }}">Következő →</a></li>
            @else
                <li class="disabled"><span>Következő →</span></li>
            @endif
        </ul>
    </div>
</div>
@endif


<script>

</script>

