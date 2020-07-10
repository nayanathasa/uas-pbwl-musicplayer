<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Track;
use App\Album;
use App\Artist;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Track::all();
        return view('track.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artists = Artist::all();
        $albums = Album::all();
        return view('track.add', compact('artists', 'albums'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'artist_id' => 'required',
            'album_id' => 'required',
            'time' => 'required',
            'file' => 'required'
        ]);

        Track::create([
            'name' => $request->name, 
            'artist_id' => $request->artist_id, 
            'album_id' => $request->album_id, 
            'time' => $request->time, 
            'file' => $request->file 
        ]);

        return redirect('track');
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
    public function edit(Track $row)
    {
        $artists = Artist::all();
        $albums = Album::all();

        return view('track.edit', compact('row', 'artists', 'albums'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Track $row)
    {
        $request->validate([
            'name' => 'required',
            'artist_id' => 'required',
            'album_id' => 'required',
            'time' => 'required',
            'file' => 'required'
        ]);

        Track::where('id', $row->id)
                ->update([
                    'name' => $request->name, 
                    'artist_id' => $request->artist_id, 
                    'album_id' => $request->album_id, 
                    'time' => $request->time, 
                    'file' => $request->file 
                ]);
         return redirect('/track');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Track::findOrFail($id);
        $row->delete();

        return redirect('track');
    }
}
