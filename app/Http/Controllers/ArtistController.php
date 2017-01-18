<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Song;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
  public function index()
  {
    $artists = Artist::all();
    return view ('artists.all', compact('artists'));
  }

  public function search(Request $request){
    $search = $request->artist;

    $artists = Artist::where('name', 'LIKE', "$search")->get();

    return view('artists.search', compact('artists'));
}
public function show(Artist $artist){
  return view('artists.info', compact('artist'));
}
public function addForm(){
  return view('artists.addArtist');
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

 public function deleteArtist(Request $request, Artist $artist){

   $artist->delete($request->all());

   $artists = Artist::all();
     return view('artists.all' , compact('artists'));
  }

  public function editArtist(Request $request, Artist $artist){
    return view('artists.edit', compact('artist'));
   }

   public function update(Request $request, Artist $artist){
     $artist->update($request->all());
     return view('artists.info', compact('artist'));
    }
}
