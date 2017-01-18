<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Song;
use Illuminate\Http\Request;

class AddController extends Controller
{

public function addSong(){
  return view ('add.addSong');
}

public function addArtist(Request $request){

    $artist = new Artist;
    $artist->name = $request->name;
    $artist->DOB = $request->DOB;
    $artist->nationality = $request->nationality;
    $artist->about = $request->about;

    $artist->save();

    $artists = Artist::all();

    return view('artists.all' , compact('artists'));
 }
}
