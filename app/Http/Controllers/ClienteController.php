<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientes = Cliente::all();
        return view ('clientes.clienteIndex', compact ('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clientes.clienteForm');
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
          'direccion' => 'required',
          'ciudad' => 'required',
          'email' => ['required', 'string', 'email', 'max:255', 'unique:clientes']
        ]);

        Cliente::create($request->all());
        return redirect()->route('clientes.index')->with([
                  'mensaje' => 'Nuevo cliente agregado',
                  'alert-class' => 'alert-warning',
              ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
        return view('clientes.clienteShow', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
        return view('clientes.clienteForm', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
        $request->validate([
          'nombre' => 'required|max:255',
          'direccion' => 'required',
          'ciudad' => 'required',
          'email' => ['required', 'string', 'email', 'max:255', 'unique:clientes,email,'.$cliente->id]
        ]);

        $cliente->nombre = $request->nombre;
        $cliente->direccion = $request->direccion;
        $cliente->ciudad = $request->ciudad;
        $cliente->email = $request->email;

        $cliente->save();

        return redirect()->route('clientes.show', compact('cliente'))->with([
                  'mensaje' => 'Cliente actualizado',
                  'alert-class' => 'alert-warning',
              ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
        $cliente->delete();
        return redirect()->route('clientes.index')->with([
                  'mensaje' => 'Cliente eliminado',
                  'alert-class' => 'alert-warning',
              ]);
    }
}
