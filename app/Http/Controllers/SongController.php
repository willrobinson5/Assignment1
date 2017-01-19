<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{

public function addSongForm(Request $request, Artist $artist){
  return view('song.addSong', compact('artist'));
}


public function addSong(Request $request, Artist $artist){

    $song = new Song;
    $song->artist_id = $artist->id;
    $song->title = $request->title;
    $song->length = $request->length;

    $song->save();

    $song = Song::all();

    return view('artists.info' , compact('artist'));
 }
}
