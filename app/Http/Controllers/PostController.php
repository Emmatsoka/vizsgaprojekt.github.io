<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postmodel;
use App\Models\Likemodel;
use App\Models\Commentmodel;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{

    public function index()
    {
        $data = Postmodel::paginate(5);

        return view('dashboard')->with('data', $data);
    }



    public function store(Request $request)
{
    $request->validate([
        'filetoupload' => 'file|max:11000|mimes:jpeg,png,gif,mp4,mov,avi,mp3,wav,ogg',
    ]);

        $data = new Postmodel();
        $data->title = $request->titletoupload;
        $data->context = $request->contexttoupload;
        $data->user_id = auth()->id();

    if ($request->hasFile('filetoupload')) {
        $file = $request->file('filetoupload');
        $filename = 'file_' . time() . '.' . $file->getClientOriginalExtension();
        $path = 'user/';

        $file->move($path, $filename);

        $data->filepath = $path . $filename;
    }

    $data->save();

    return redirect()->back();
}

    public function show($id)
    {
        $post = Postmodel::findOrFail($id);
        return view('bejegyzes', compact('post'));
    }


    public function edit($id)
    {
        $post = Postmodel::find($id);
        return view('bejegyzes-szerkesztese', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Postmodel::find($id);
        if (!$post) {
            abort(404);
        }

        if ($post->user_id !== auth()->id() && auth()->user()->admin !== 1) {
            abort(403);
        }



        $request->validate([
            'filetoupload' => 'file|max:11000|mimes:jpeg,png,gif,mp4,mov,avi,mp3,wav,ogg',
        ]);




    $post->title = $request->titletoupload;
    $post->context = $request->contexttoupload;
    $post->user_id = auth()->id();

if ($request->hasFile('filetoupload')) {
    $file = $request->file('filetoupload');
    $filename = 'file_' . time() . '.' . $file->getClientOriginalExtension();
    $path = 'user/';

    $file->move($path, $filename);

    $post->filepath = $path . $filename;
    }

    $post->save();

    return view('bejegyzes', compact('post'));
    }

    public function destroy($id)
    {

        $post = Postmodel::findOrFail($id);


        if ($post->user_id === auth()->id() || auth()->user()->admin) {

            Likemodel::where('post_id', $id)->delete();
            Commentmodel::where('post_id', $id)->delete();
            $post->delete();

            return redirect()->back()->with('success', 'A bejegyzés sikeresen törölve lett.');
        } else {

            return redirect()->back()->with('error', 'Nincs jogosultságod a bejegyzés törléséhez.');
        }
    }
}
