<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proovedor extends Model
{
  protected $fillable = ['nombre', 'codigo', 'email'];
    //
    public function compras()
    {

      return $this->hasMany(Compra::class);
    }
}
