<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Archivo;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth')->except('index');
    $this->middleware('admin')->only('destroy', 'update');
    // code...
  }
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
        'precio' => 'required',
        'avatar' => 'required'
      ]);
        //
        //dd($request->all());
        $pro = new Producto();
      //  $request->file('avatar')->store('public');
        $pro->nombre = $request->input('nombre');
        $pro->descripcion = $request->descripcion;
        $pro->precio = $request->precio;
        $pro->cantidad = 0;

        $pro->save();

      //  $im = $pro->id;
        $arch = new Archivo(['img' => $request->file('avatar')->store('public') ]);
        $pro->archivos()->save($arch);
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

        if ($request->hasFile('avatar')) {
        //$arch =  ::where('imagen_id',$producto->id)->get(['id']);
        Archivo::where('imagen_id', '=', $producto->id)->update(array('img' => $request->file('avatar')->store('public')));
        }

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
