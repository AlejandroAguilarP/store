<?php

namespace App\Http\Controllers;

use App\Compra;
use App\Producto;
use App\User;
use App\Proovedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = Compra::all();
      //  dd($compras);
        return view('compras.compraIndex', compact('compras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pro = Producto::all();
        $prov = Proovedor::all();
        return view('compras.compraForm',compact('pro', 'prov'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*
        $compra = new Compra;
        $compra->user_id = Auth::id();
        $compra->proovedor_id = $request->proveedor;
        $compra->articulo_id = $request->articulo;
        $compra->fecha_realizada = \Carbon\Carbon::now();
        $compra->descripcion = $request->descripcion;
        $compra->total = $request->total;

        $compra->save();*/
        $cantidad = [10,3,5,20,12];
        $i = 0;
        $total = 0;
        foreach (Producto::find($request->producto_id) as $prod){
           $total += $prod->precio*$cantidad[$i];
           $i++;
        }
        $request->merge([
          'fecha_realizada' => \Carbon\Carbon::now()->toDateTimeString(),
          'user_id' => \Auth::id(),
        'total' => $total
        ]);



        $com = Compra::create($request->except('producto_id', 'cantidad'));
      //  $com->producto()->attach($request->producto_id);
      $i = 0;
      foreach ($request->producto_id as $pro) {
        $com->producto()->attach($pro, ['cantidad' => $cantidad[$i] ]);
        $i++;
      }
       //$request->cantidad]);
      //  $user = User::find($request->user_id);
      //  $user->compras()->save($compra);
      //  $compra = new Compra ($request->all());
        return redirect()->route('compras.create')->with([
                  'mensaje' => 'Compra Exitosa',
                  'alert-class' => 'alert-warning',
              ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function show(Compra $compra)
    {
        //
        return view('compras.compraShow', compact('compra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function edit(Compra $compra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compra $compra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compra $compra)
    {
      $compra->producto()->detach();
      $compra->delete();
      return redirect()->route('compras.index')->with([
                'mensaje' => 'Compra eliminada',
                'alert-class' => 'alert-warning',
            ]);
    }
}
