@extends('layouts.star')

@section('contenido')
          <div class="row">
            <div class="col-md-8 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      @include('partials.formErrors')
                      <h4 class="card-title">Cliente</h4>
                      <p class="card-description">
                        Nuevo Cliente
                      </p>
                      @if(isset($cliente))
                        <form  action="{{route('clientes.update', $cliente->id)}}"method="post" class="forms-sample">
                          <input type="hidden" name="_method" value="PATCH">
                        @else
                          <form  action="{{route('clientes.store')}}" method="post" class="forms-sample">
                      @endif
                        @csrf
                        <div class="form-group">
                          <label for="nombre">Nombre</label>
                          <input type="text" class="form-control" name="nombre" value="{{ isset($cliente) ? $cliente->nombre : old('nombre') }}" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                          <label for="direccion">Direccion</label>
                          <input type="text" class="form-control" name="direccion" value="{{ isset($cliente) ? $cliente->direccion : old('direccion') }}" placeholder="Direccion">
                        </div>
                        <div class="form-group">
                          <label for="ciudad">Ciudad</label>
                          <input type="text" class="form-control" name="ciudad" value="{{ isset($cliente) ? $cliente->ciudad : old('ciudad') }}" placeholder="Ciudad">
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" name="email" value="{{ isset($cliente) ? $cliente->email : old('email') }}" placeholder="Email">
                        </div>
                        <button type="submit" class="btn btn-inverse-success btn-rounded btn-fw">Aceptar</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
