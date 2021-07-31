<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $played = DB::table('played')
            ->join('artist', 'artist.artist_id', '=', 'played.artist_id')
            ->join('album', 'album.album_id', '=', 'played.album_id')
            ->join('track', 'track.track_id', '=', 'played.track_id')
            ->get();
        return view('play.index',['played' => $played]);
    }

}
