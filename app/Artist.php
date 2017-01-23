<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model

{
  //Allows for the columns to be entered into/edited
  protected $fillable  = ['name', 'nationality', 'DOB', 'about'];
  //Creates the relationship between the artists and the songs in the song table
  public function songs() {
    return $this->hasMany(Song::class);
  }
}
