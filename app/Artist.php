<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model

{

  protected $fillable  = ['name', 'nationality', 'DOB', 'about'];

    public function songs() {
      return $this->hasMany(Song::class);
    }
}
