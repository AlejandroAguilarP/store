<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    //
    protected $guarded = ['id'];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
    public function producto()
    {
      return $this->belongsToMany(Producto::class)->withPivot('cantidad');
    }

    public function proovedor()
    {
      return $this->belongsTo(Proovedor::class)->withTrashed ();
    }
}
