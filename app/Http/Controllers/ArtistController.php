<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Song;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
  //Show a list of the artist that are in the artist
  public function index()
  {
    $artists = Artist::all();
    return view ('artists.all', compact('artists'));
  }

  //search the artist table for where the name of the artist equals the input in the search box
  public function search(Request $request){
    $search = $request->artist;
    $artists = Artist::where('name', 'LIKE', "$search")->get();

    return view('artists.search', compact('artists'));}

  //shows the information about the artist clicked from the search results.
  public function show(Artist $artist){
    return view('artists.info', compact('artist'));
  }
  //Loads the form to add an artist into the artist table.
  public function addArtistForm(){
    return view('artists.addArtist');
  }
  //Adds the entry into the table
  public function addArtist(Request $request){
    //creates a new variable
    $artist = new Artist;
    //Adds each column individually
    $artist->name = $request->name;
    $artist->DOB = $request->DOB;
    $artist->nationality = $request->nationality;
    $artist->about = $request->about;
    //Saves the changes
    $artist->save();
    $artists = Artist::all();
    //Retuens the all artists view
    return view('artists.all' , compact('artists'));
 }

  //Deletes the artist currently selected, from the database
  public function deleteArtist(Request $request, Artist $artist){
    $artist->delete($request->all());
    $artists = Artist::all();
    return view('artists.all' , compact('artists'));
  }
  //Loads the form to edit the information of the artist selected
  public function editArtist(Request $request, Artist $artist){
    return view('artists.edit', compact('artist'));
   }
  //Method that changes the information in the table from the edit form
   public function update(Request $request, Artist $artist){
     $artist->update($request->all());
     return view('artists.info', compact('artist'));
    }
}
