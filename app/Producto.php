<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    public function compras()
    {
      return $this->hasMany('Compra');
    }
}
