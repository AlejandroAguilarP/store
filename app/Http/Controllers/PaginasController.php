<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
   public function info()
   {
       return view('paginas/informacion');
   }



   public function equipo()
   {
     return view('paginas.equipo');
   }
}
