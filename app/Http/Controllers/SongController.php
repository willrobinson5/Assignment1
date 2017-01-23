<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Song;
use App\User;
use Illuminate\Http\Request;
use Auth;

class SongController extends Controller
{

  //Loads the from to add a new song into the song table
  public function addSongForm(Request $request, Artist $artist){
    return view('song.addSong', compact('artist'));
  }

  //creats a new entry into the song table
  public function addSong(Request $request, Artist $artist){
    //Create a new variable
    $song = new Song;
    //Gets the user id of the user currenlty signed in.
    $user = Auth::user()->id;
    //Adds the columns from the form input
    $song->artist_id = $artist->id;
    $song->user_id = $user;
    $song->title = $request->title;
    $song->length = $request->length;
    //Saves the variable
    $song->save();
    $song = Song::all();
    //Returns the artist view of the artist just edited.
    return view('artists.info' , compact('artist'));
  }
  //Deletes the song from the song table so it won't display on the artist page
  public function deleteSong(Request $request, Song $song){
    $song->delete($request->all());
    //$song = Song::all();
    return view('song.deleted' , compact('song'));
  }
}
