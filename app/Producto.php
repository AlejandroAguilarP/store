<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    public function compras()
    {
      return $this->belongsToMany(Compra::class)->withPivot('cantidad');
    }

    public function ventas()
    {
      return $this->hasMany('App/Venta');
    }
}
