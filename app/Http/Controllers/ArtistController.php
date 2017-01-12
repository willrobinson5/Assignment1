<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
  public function index()
  {
    return view ('artistPage');
  }

  public function search(Request $request){
    $search = $request->artist;

    $artist = Artist::where('name', 'LIKE', "$search")->get();

    return view('artists.search', compact('artist'));
}
}
