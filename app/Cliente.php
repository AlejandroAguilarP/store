<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
  use SoftDeletes;

    //
    protected $guarded = ['id'];
    public function ventas()
    {

      return $this->hasMany('Venta')->withTrashed ();
    }

    protected $dates = ['deleted_at'];

    public function getNombreClienteAttribute() //Accessor
    {
      // code...
      return ucfirst($this->nombre. ' - '.$this->id);
    }

    public function setDireccionAttribute($direccion) //Mutator
    {
      $this->attributes['direccion'] = strtoupper($direccion);
    }
}
