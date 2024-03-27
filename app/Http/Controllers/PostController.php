<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postmodel;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Postmodel::all();
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
        //dd($request->all());
        
        $datas = new Postmodel();
        $datas->title = $request -> titletoupload;
        $datas->context = $request -> contexttoupload;
        $datas->name = $request -> name;
        /*
        $validated = $request->validate([
            'title' => 'required|max:255',
            'context' => 'required|max:255',
            'imagepath' => 'required',
        ]);
        */

        //FÁJL
        $file = $request -> file('filetoupload');
        //kiterjesztés
        $extension = $request->filetoupload->extension();
        //fájl név
        $filename = 'kep' . time() . '.' . $extension; 
        //elérési út
        $path = 'user/';
        $file->move($path, $filename);
        $datas['imagepath'] = $filename;

        $datas->save();
        return redirect()->refresh();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
