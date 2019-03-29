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
                        Compra
                      </p>

                        <form  action="{{route('compras.store')}}" method="post" class="forms-sample">
                        @csrf
                        <div class="form-group">
                          <label for="proveedor">Proveedor</label>
                          <select class="form-control" name="proveedor">
                            @foreach($pro as $prov)
                            <option value="{{ $prov->id }}"> {{$prov->nombre}} </option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="articulo">Articulo</label>
                          <input type="text" class="form-control" name="articulo" value="" >
                        </div>
                        <div class="form-group">
                          <label for="descripcion">descripcion</label>
                          <input type="text" class="form-control" name="descripcion" value="">
                        </div>
                        <div class="form-group">
                          <label for="total">Total</label>
                          <input type="text" class="form-control" name="total" value="">
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
