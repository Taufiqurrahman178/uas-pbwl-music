<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $track = DB::table('track')
            ->join('album', 'album.album_id', '=', 'track.album_id')
            ->join('artist', 'artist.artist_id', '=', 'track.artist_id')
            ->get();
        return view('track.index',['tracks' => $track]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artist = DB::table('artist')->get();
        return view('track.tambah',['artists' => $artist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('track')->insert([
            'artist_id' => $request->post()['artist_id'],
            'album_id' => $request->post()['album_id'],
            'track_name' => $request->post()['track_name'],
            'time' => $request->post()['time']
        ]);
        return redirect('/track');
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
        $track = DB::table('track')->where('track_id', '=', $id)->first();
        $artist = DB::table('artist')->get();
        return view('track.edit',['track' => $track, 'artists' => $artist]);
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
        DB::table('track')
              ->where('track_id', $id)
              ->update(['artist_id' => $request->post()['artist_id'], 'album_id' => $request->post()['album_id'], 'track_name' => $request->post()['track_name'], 'time' => $request->post()['time']]);
        return redirect('/track');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('track')->where('track_id', '=', $id)->delete();
        return redirect('/track');
    }
    public function get_album(Request $request){
        
        $album = DB::table('album')
            ->where('artist_id', $request->post()['artist_id'])
            ->get();
        return json_encode($album);
    }
    
    public function mainkan($id)
    {
        
        $track = DB::table('track')->where('track_id', '=', $id)->first();

        DB::table('played')->insert([
            'artist_id' => $track->artist_id,
            'album_id' => $track->album_id,
            'track_id' => $track->track_id,
            'played' => date('Y-m-d H:i:s')
        ]);
        return redirect('/play?mainkan=true');
    }
}
