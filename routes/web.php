<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $genres = DB::table('songs')->select('genre')->distinct()->get();
    return view('welcome', ['genres' => $genres]);
});



Route::get('/songs', function () {
    $genre = request('genre');
    $songs = DB::table('songs')->where('genre', '=', $genre)->get();
return view('songs' , ['songs' => $songs, 'genre' => $genre]);
});

