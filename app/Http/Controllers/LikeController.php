<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Likemodel;
use App\Models\Postmodel;
class LikeController extends Controller
{
    public function likeHozzaadas(Request $request)
    {
        $letezoLike = Likemodel::where('user_id', auth()->id())
                                ->where('post_id', $request->postId)
                                ->first();

        if ($letezoLike) {
            $letezoLike->delete();
            $post = Postmodel::find($request->postId);
            $post->likes()->decrement('szamlalo');
            $status = 'unliked';
        } else {
            $like = new Likemodel();
            $like->user_id = auth()->id();
            $like->post_id = $request->postId;
            $like->save();

            $post = Postmodel::find($request->postId);
            $post->likes()->increment('szamlalo');
            $status = 'liked';
        }

        return response()->json(['status' => $status]);
    }


}
