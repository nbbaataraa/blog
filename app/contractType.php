<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contractType extends Model
{


    public function contract(){

      return $this->belongsTo(contract::class);
    }


}
