<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $guarded = [];

    public function contract(){

      return $this->hasMany(contract::class);
    }

    public function contractType(){

      return $this->hasMany(contractType::class);
    }
}
