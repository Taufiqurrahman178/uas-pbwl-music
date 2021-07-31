<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\PlayController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// Route untuk Artist
Route::get('/artist', [ArtistController::class, 'index']);
Route::get('/artist/tambah', [ArtistController::class, 'create']);
Route::post('/artist/tambah', [ArtistController::class, 'store']);
Route::get('/artist/ubah/{id}', [ArtistController::class, 'edit']);
Route::post('/artist/ubah/{id}', [ArtistController::class, 'update']);
Route::get('/artist/hapus/{id}', [ArtistController::class, 'destroy']);

// Route untuk Album
Route::get('/album', [AlbumController::class, 'index']);
Route::get('/album/tambah', [AlbumController::class, 'create']);
Route::post('/album/tambah', [AlbumController::class, 'store']);
Route::get('/album/ubah/{id}', [AlbumController::class, 'edit']);
Route::post('/album/ubah/{id}', [AlbumController::class, 'update']);
Route::get('/album/hapus/{id}', [AlbumController::class, 'destroy']);


// Route untuk Track
Route::get('/track', [TrackController::class, 'index']);
Route::get('/track/tambah', [TrackController::class, 'create']);
Route::post('/track/tambah', [TrackController::class, 'store']);
Route::get('/track/ubah/{id}', [TrackController::class, 'edit']);
Route::post('/track/ubah/{id}', [TrackController::class, 'update']);
Route::get('/track/hapus/{id}', [TrackController::class, 'destroy']);
Route::post('/track/get_album', [TrackController::class, 'get_album']);
Route::get('/track/mainkan/{id}', [TrackController::class, 'mainkan']);


// Route untuk Play
Route::get('/play', [PlayController::class, 'index']);