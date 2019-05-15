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
      return $this->belongsToMany(Venta::class)->withPivot('cantidad');
    }


    public function archivos()
    {
      return $this->morphMany('App\Archivo', 'imagen');
      // code...
    }

    public function scopeInventario($query)
    {
        return $query->where('cantidad', '>=', 1);
    }
}
