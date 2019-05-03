<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    //
    protected $guarded = ['id'];
    public function imagen()
    {
      return $this->morphTo();
      // code...
    }

}
