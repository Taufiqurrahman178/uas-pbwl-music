<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $album = DB::table('album')
            ->join('artist', 'artist.artist_id', '=', 'album.artist_id')
            ->get();
        return view('album.index',['albums' => $album]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artist = DB::table('artist')->get();
        return view('album.tambah',['artists' => $artist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('album')->insert([
            'artist_id' => $request->post()['artist_id'],
            'album_name' => $request->post()['album_name']
        ]);
        return redirect('/album');
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
        $album = DB::table('album')->where('album_id', '=', $id)->first();
        $artist = DB::table('artist')->get();
        return view('album.edit',['album' => $album, 'artists' => $artist]);
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
        DB::table('album')
              ->where('album_id', $id)
              ->update(['album_name' => $request->post()['album_name'], 'artist_id' => $request->post()['artist_id']]);
        return redirect('/album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('album')->where('album_id', '=', $id)->delete();
        return redirect('/album');
    }
}
