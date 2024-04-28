<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Likemodel;
use App\Models\Postmodel;
use App\Models\Commentmodel;
class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'content' => 'required|string|max:255',
        ]);

        $comment = new Commentmodel();
        $comment->user_id = auth()->id();
        $comment->post_id = $request->post_id;
        $comment->content = $request->content;
        $comment->save();

        return redirect()->back()->with('success', 'Hozzászólás sikeresen létrehozva!');
    }
    public function destroy($id)
    {
        $comment =Commentmodel::findOrFail($id);



        if ($comment->user_id === auth()->id() || auth()->user()->admin) {

            $comment->delete();

            return redirect()->back()->with('success', 'A comment sikeresen törölve lett.');
        } else {

            return redirect()->back()->with('error', 'Nincs jogosultságod a comment törléséhez.');
        }
    }
}
