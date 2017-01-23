<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{

//Creates the relationship between the three tables
public function artist() {
  return $this->belongsTo(Artist::class);
}
public function user(){
  return $this->belongsTo(User::class);
}

}
