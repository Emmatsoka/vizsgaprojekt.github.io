<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postmodel;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Postmodel::paginate(5);

        return view('dashboard')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view('ujpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Új bejegyzés létrehozása és adatok mentése
        $data = new Postmodel();
        $data->context = $request->contexttoupload;

        // Aktuális bejelentkezett felhasználó azonosítójának lekérése és beállítása a user_id mezőbe
        $data->user_id = auth()->id();


        if ($request->hasFile('filetoupload')) {
            $file = $request->file('filetoupload');
            $extension = $file->extension();
            $filename = 'kep' . time() . '.' . $extension;
            $path = 'user/';
            $file->move($path, $filename);
            $data->imagepath = $filename;
        }

        // A bejegyzés mentése adatbázisba
        $data->save();

        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Postmodel::find($id);
        return view('bejegyzes-szerkesztese', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
  $post = Postmodel::find($id);

    $post->context = $request->contexttoupload;
    if ($request->hasFile('filetoupload')) {
    $file = $request->file('filetoupload');
    $extension = $request->filetoupload->extension();
    $filename = 'kep' . time() . '.' . $extension;
    $path = 'user/';
    $file->move($path, $filename);
    $post->imagepath = $filename;
    }

    $post->save();

    // Visszairányítás a bejegyzés megtekintéséhez
    return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Bejegyzés kiválasztása az azonosító alapján
        $post = Postmodel::findOrFail($id);

        // Ellenőrzés, hogy a bejegyzést a bejelentkezett felhasználó törölheti-e
        if ($post->user_id === auth()->id() || auth()->user()->admin) {
            // Ha a bejegyzés tulajdonosa vagy admin törli, akkor töröljük
            $post->delete();

            return redirect()->back()->with('success', 'A bejegyzés sikeresen törölve lett.');
        } else {
            // Ha a bejelentkezett felhasználó nem rendelkezik jogosultsággal, hibaüzenetet jelenítünk meg
            return redirect()->back()->with('error', 'Nincs jogosultságod a bejegyzés törléséhez.');
        }
    }
}
