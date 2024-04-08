<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Likemodel;
use App\Models\Postmodel;
class LikeController extends Controller
{
    public function likeHozzaadas(Request $request)
    {
        // Ellenőrizd, hogy a felhasználó már like-olta-e a posztot
        $letezoLike = Likemodel::where('user_id', auth()->id())
                                ->where('post_id', $request->postId)
                                ->first();
    
        if ($letezoLike) {
            // Ha már like-olta, ne tedd hozzá újra
            return redirect()->back();
        }
    
        // Ha még nem like-olta, új like létrehozása
        $like = new Likemodel();
        $like->user_id = auth()->id(); // Itt adjuk hozzá a user_id-t a like-hoz
        $like->post_id = $request->postId;
        $like->save();
    
        // A like-ok számának növelése a bejegyzéshez tartozó likes táblában
        $post = Postmodel::find($request->postId);
        $post->likes()->increment('szamlalo');
    
        // Visszatérési érték küldése
        return redirect()->back();
    }
    
    public function likeTorles(Request $request)
    {
        // Like vagy dislike keresése a felhasználó és a poszt alapján
        $like = Likemodel::where('user_id', auth()->id())
                    ->where('post_id', $request->postId)
                    ->first();
    
        if (!$like) {
            // Ha nincs ilyen like vagy dislike, hibaüzenet küldése
            return redirect()->back();
        }
    
        // Like vagy dislike törlése
        $like->delete();
    
        // A like-ok számának csökkentése vagy növelése a bejegyzéshez tartozó likes táblában
        $post = Postmodel::find($request->postId);
        if ($post) {
            $post->likes()->decrement('szamlalo');
        }
    
        // Visszatérési érték küldése
        return redirect()->back();
    }
    
    
public function likeLekerdezes($postId)
{
    // Like-ok lekérése az adott poszthoz
    $likeok = Likemodel::where('post_id', $postId)->get();

    // Visszatérési érték küldése
    return response()->json(['likeok' => $likeok], 200);
}
public function likeokSzama($postId)
{
    // Like-ok számának lekérése az adott poszthoz
    $likeokSzama = Likemodel::where('post_id', $postId)->count();

    // Visszatérési érték küldése
    return response()->json(['likeok_szama' => $likeokSzama], 200);
}
}
