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



        $prov = new Proovedor();
        $prov->nombre = $request->input('nombre');
        $prov->codigo = $request->codigo;
        $prov->email = $request->email;

        $prov->save();

        return redirect()->route('proovedors.index');


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
        //
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
    }
}
