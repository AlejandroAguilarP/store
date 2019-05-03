<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proovedor extends Model
{
  protected $fillable = ['nombre', 'codigo', 'email'];

  use SoftDeletes;
    //
    public function compras()
    {

      return $this->hasMany(Compra::class);
    }

    protected $dates = ['deleted_at'];
}
