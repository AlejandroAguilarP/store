<?php

namespace App\Http\Controllers;

use App\Proovedor;
use Illuminate\Http\Request;

class ProovedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $proveedors = Proovedor::all();
        return view ('proveedor.proveedorIndex', compact ('proveedors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proveedor.proveedorForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
          'nombre' => 'required|max:255',
          'codigo' => 'required|max:10',
          'email' => ['required', 'string', 'email', 'max:255', 'unique:proovedors']
        ]);

        /*

        $prov = new Proovedor();
        $prov->nombre = $request->input('nombre');
        $prov->codigo = $request->codigo;
        $prov->email = $request->email;

        $prov->save();
        */

        Proovedor::create($request->all());
        return redirect()->route('proovedors.index')->with([
                  'mensaje' => 'Nuevo proveedor agregado',
                  'alert-class' => 'alert-warning',
              ]);


    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Proovedor  $proovedor
     * @return \Illuminate\Http\Response
     */
    public function show(Proovedor $proovedor)
    {
        //
        return view('proveedor.proveedorShow', compact('proovedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proovedor  $proovedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Proovedor $proovedor)
    {
        //
        return view('proveedor.proveedorForm', compact('proovedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proovedor  $proovedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proovedor $proovedor)
    {
      $request->validate([
        'nombre' => 'required|max:255',
        'codigo' => 'required|max:10',
        'email' => ['required', 'string', 'email', 'max:255', 'unique:proovedors']
      ]);
        //

        $proovedor->nombre = $request->input('nombre');
        $proovedor->email = $request->email;
        $proovedor->codigo = $request->codigo;

        $proovedor->save();

        return redirect()->route('proovedors.show', compact('proovedor'))->with([
                  'mensaje' => 'Proveedor actualizado',
                  'alert-class' => 'alert-warning',
              ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proovedor  $proovedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proovedor $proovedor)
    {
        //
        $proovedor->delete();
        return redirect()->route('proovedors.index')->with([
                  'mensaje' => 'Proveedor eliminado',
                  'alert-class' => 'alert-warning',
              ]);
    }
}
