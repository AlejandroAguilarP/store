<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proovedor extends Model
{
    //
    public function compras()
    {
      return $this->hasMany('Compra');
    }
}
