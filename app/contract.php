<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
  public function profile(){

    return $this->belongsTo(profile::class);
  }

    public function contractType(){

      return $this->hasMany(contractType::class);
    }


}
