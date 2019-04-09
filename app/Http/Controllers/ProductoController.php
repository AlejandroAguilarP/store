<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $productos = Producto::all();
      return view ('productos.productosIndex', compact ('productos'));
      //  return view('productos.productosIndex');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.productoForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'nombre' => 'required|max:255',
        'descripcion' => 'required|max:100',
        'precio' => 'required'
      ]);
        //
        //dd($request->all());
        $pro = new Producto();
        $pro->nombre = $request->input('nombre');
        $pro->descripcion = $request->descripcion;
        $pro->precio = $request->precio;

        $pro->save();

        return redirect()->route('productos.index')->with([
                  'mensaje' => 'Producto añadido con exito',
                  'alert-class' => 'alert-warning',
              ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
      return view('productos.productosShow', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('productos.productoForm', compact('producto'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
      $request->validate([
        'nombre' => 'required|max:255',
        'descripcion' => 'required|max:100',
        'precio' => 'required'
      ]);
        //
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;

        $producto->save();

        return redirect()->route('productos.show', compact('producto'))->with([
                  'mensaje' => 'Producto actualizado',
                  'alert-class' => 'alert-warning',
              ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->compras()->detach();
        $producto->delete();
        return redirect()->route('productos.index')->with([
                  'mensaje' => 'Producto eliminado',
                  'alert-class' => 'alert-warning',
              ]);
    }
}
