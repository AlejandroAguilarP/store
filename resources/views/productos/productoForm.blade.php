@extends('layouts.star')

@section('contenido')
          <div class="row">
            <div class="col-md-8 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Agregar Productos</h4>
                      <p class="card-description">
                        Agregue sus productos
                      </p>
                      @if(isset($producto))
                        <form  action="{{route('productos.update', $producto->id)}}" method="post" class="forms-sample">
                          <input type="hidden" name="_method" value="PATCH">
                      @else
                        <form  action="{{route('productos.store')}}" method="post" class="forms-sample">
                      @endif
                        @csrf
                        <div class="form-group">
                          <label for="nombre">Producto</label>
                          <input type="text" class="form-control" name="nombre" value="{{ $producto->nombre ?? ''}}" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                          <label for="descripcion">Descripcion</label>
                          <input type="text" class="form-control" name="descripcion" value="{{ $producto->descripcion ?? ''}}"placeholder="Descripcion">
                        </div>
                        <div class="form-group">
                          <label for="precio">Precio</label>
                          <input type="number" class="form-control" name="precio" value="{{ $producto->precio ?? ''}}" placeholder="$1000">
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Aceptar</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
