<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function index()
    {
      $ventas = DB::table('venta')
      ->where('descripcion', 'venta exitosa')
      ->orWhere('id' , '1')->get();

      return view('venta.ventaIndex', compact ('ventas'));
    }
}
