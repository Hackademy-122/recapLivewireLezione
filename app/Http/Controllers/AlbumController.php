<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Genre;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //la funzione alll ritorna una collection
        $albums = Album::all();
        return view('album.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('album.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        return view('album.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        $allGenres=Genre::all();
        return view('album.edit', compact('album', 'allGenres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        //dd($request->all());
        $album->update([
            'title' => $request->title,
            'artist' => $request->artist,
            'release' => $request->release
        ]);

        foreach($request->genresSelected as $genre){
            $album->genres()->attach($genre);
        }

        return redirect()->route('album_index')->with('message','Album modificato correttamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        // foreach ($album->genres as $genre) {
        //     $genre->albums()->detach($album->id);
        // }

        $album->delete();

        return redirect()->route('album_index')->with('message','Album cancellato correttamente');
    }
}
