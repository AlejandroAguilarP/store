<?php

namespace App\Http\Controllers;

use App\Venta;
use App\Producto;
use App\Cliente;
use Mail;
use App\Mail\SendEmail;
use Illuminate\Http\Request;

class VentaController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('admin')->only('destroy');
    // code...
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $ventas = Venta::with(['user:id,nombre', 'cliente:id,nombre', 'producto'])->get();
    //  dd($compras);
      return view('ventas.ventaIndex', compact('ventas'));
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
        $cliente = Cliente::all();
        return view('ventas.ventaForm',compact('pro', 'cliente'));
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
      'producto_id.*' => 'required|max:255',
      'descripcion' => 'required|max:100',
      'cantidad.*' => 'required',
      'cliente_id' => 'required'
    ]);
      $i = 0;
      $total = 0;
      foreach (Producto::find($request->producto_id) as $prod)
      {
          if($prod->cantidad < $request->cantidad[$i])
          {
            return redirect()->route('ventas.create')->with([
                      'mensaje' => 'Existencia insuficiente de '.$prod->nombre,
                      'alert-class' => 'alert-warning',
                  ]);
          }
          else{
           $total += $prod->precio*$request->cantidad[$i];
           $i++;
         }
      }
      $request->merge([
        'fecha_realizada' => \Carbon\Carbon::now()->toDateTimeString(),
        'user_id' => \Auth::id(),
      'total' => $total
      ]);

      $venta= Venta::create($request->except('producto_id', 'cantidad'));
    $i = 0;
    foreach ($request->producto_id as $pro) {
      $venta->producto()->attach($pro, ['cantidad' => $request->cantidad[$i] ]);
      $producto = Producto::find($pro);
      $producto->cantidad = $producto->cantidad - $request->cantidad[$i];
      $producto->save();
      $i++;
    }

    $cliente = Cliente::find($request->cliente_id);

    Mail::to($cliente->email)->send(new SendEmail($cliente, $venta));

      return redirect()->route('ventas.create')->with([
                'mensaje' => 'Venta Realizada con Exito',
                'alert-class' => 'alert-success',
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        //
        return view('ventas.ventaShow', compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        //
        foreach ($venta->producto as $prod)
        {
          $producto = Producto::find($prod->pivot->producto_id);
          $producto->cantidad+= $prod->pivot->cantidad;
          $producto->save();
        }

        $venta->producto()->detach();
        $venta->delete();
        return redirect()->route('ventas.index')->with([
                  'mensaje' => 'Venta eliminada',
                  'alert-class' => 'alert-warning',
              ]);
      }

      public function reporte()
      {
        $ventas = Venta::whereHas('user',function ($query) {
            $query->where('id', '=', \Auth::id());
        })->get();

      $total = Venta::where('user_id', '=', \Auth::id())->sum('total');

      $totales = Venta::sum('total');

      $porcentaje = $total*100/$totales;

        return view('ventas.ventaReporte', compact('ventas', 'total', 'totales', 'porcentaje'));
        // code...
      }
}
