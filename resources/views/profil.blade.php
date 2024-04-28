<x-app-layout>

    <div class="container mt-4" id="profil">
        <div class="row justify-content-center" id="profilrow">
            <div class="col-md">
                <div class="card">
                    <img src="{{ asset('user/' . $user->boritokep) }}" class="card-img-top" alt="Borítókép" id="boritokep">
                    <img src="{{ asset('user/' . $user->profilkep) }}" class="card-img-top" alt="Profilkép" id="profilkep">

                        <div class="text-center">
                            <h3 >{{ $user->name }}</h3>
                            <h5 >{{ $user->username }}  @if ($user->admin)
                             👑
                            @endif</h5>
                            @if (Auth::user()->username == $user->username)

                            @else
                            <a href="{{ url('baratok') }}" class="nav-link mt-3 mb-3">Barátok</a>
                            @endif
                        </div>

                        @if (Auth::user()->username == $user->username)
                        <div class="text-right ml-auto" id="profilgombdiv">

                                <a id="profilgomb" href="{{ route('profile.edit') }}" class="gomb feherhtr">{{ __('📑 Profil szerkesztése') }}</a>

                        </div>
                        @endif
                        @if (Auth::user()->username != $user->username)

                        @endif

                </div>
            </div>
        </div>
        <div class="row justify-content-center tartalomrow">

            <div class="col-md-3">

                <div class="card" id="design">

                    @if ($user->bemutatkozas != 'Nincs megadva')
                    <div class="designszekcio">
                        <h5>💬 Bemutatkozás</h5>
                        <p class="card-text text-center">{{ $user->bemutatkozas }}</p>
                    </div>
                    @endif
                    @if ($user->lakhely != 'Nincs megadva')
                    <div class="designszekcio">
                        <h5>🏠 Lakhely</h5>
                        <p class="card-text text-center">{{ $user->lakhely }}</p>
                    </div>
                    @endif
                        <div class="designszekcio">
                        <h5>🎂 Születési dátum</h5>
                        <p class="card-text text-center">{{ $user->szulev }}</p>
                    </div>
                    @if ($user->neme != 'Nincs megadva')
                        <div class="designszekcio">
                            <h5>👩🏻 Neme</h5>
                            <p class="card-text text-center">{{ $user->neme }}</p>
                        </div>

                    @endif
                    <div class="designszekcio">
                        <h5>🔗 E-mail</h5>
                        <p class="card-text text-center">{{ $user->email }}</p>
                            </div>
                </div>

            </div>
            <div class="col-md">
         @if (Auth::user()->username == $user->username)

         @include('bejegyzes-letrehozas')

          @endif
          @if($user->posts->isNotEmpty())
          @foreach($user->posts->sortByDesc('created_at')  as $post)
          <div class="card p-2" id="bejegyzes">
            <div class="card-header">
                <img src="{{ asset('user/'.$post->user->profilkep) }}" alt="" style="border-radius:100%; margin-right:10px;" height="50px" width="auto">
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

                <!-- Hozzászólások gomb és szekció -->
                <button class="gomb feherhtr comment-toggle-btn" onclick="hozzaszolasok(this)" >💬 {{ $post->comments()->count() }}</button>
            </div>
            <!-- Hozzászólások szekciója -->
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
         <!-- Új hozzászólás űrlap -->
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
        @elseif(Auth::user()->username == $user->username && $user->posts->isEmpty() )
        <p>Nincsenek posztjaid.</p>
        @elseif(Auth::user()->username !== $user->username  && $user->posts->isEmpty() )
        <p>Nincsenek posztjai.</p>


      @endif


            </div>
            </div>





            </div>


</x-app-layout>
