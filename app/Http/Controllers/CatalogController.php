<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Movie;
use DB;

class CatalogController extends Controller
{
    
    public function getIndex()
    {    
        $peliculas = Movie::all();
        return view('catalog.index', array('peliculas'=>$peliculas));
    }

    public function getShow($id)
    {
        $pelicula = Movie::findOrFail($id);
        return view('catalog.show', array( 'id'=>$id, 'pelicula'=> $pelicula ));
    }

    public function getCreate()
    {
        return view('catalog.create');
    }
    
    public function getEdit($id)
    {
        $pelicula = Movie::findOrFail($id);
        return view('catalog.edit',  array( 'id'=>$id, 'pelicula'=>$pelicula ));
    }

    public function postCreate(Request $request)
    {
        $createfilm = new Movie;
        $createfilm ->  title = $request->input('title');
        $createfilm -> year = $request->input('year');
        $createfilm -> director = $request->input('director');
        $createfilm -> poster = $request->input('poster');
        $createfilm -> synopsis = $request->input('synopsis');
        $createfilm -> save();
        return redirect('catalog');
    }

    public function putEdit(Request $request)
    {
        $editfilm = Movie::findOrFail($request->id);
        $editfilm ->  title = $request->input('title');
        $editfilm -> year = $request->input('year');
        $editfilm -> director = $request->input('director');
        $editfilm -> poster = $request->input('poster');
        $editfilm -> synopsis = $request->input('synopsis');
        $editfilm -> save();
        return redirect('catalog.index', $request->id);
    }
    
}
 