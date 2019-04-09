@extends('layouts.star')

@section('contenido')
          <div class="row">
            <div class="col-md-8 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      @include('partials.formErrors')
                      <h4 class="card-title">Agregar Productos</h4>
                      <p class="card-description">
                        Compra
                      </p>
                        <form  action="{{route('compras.store')}}" method="post" class="forms-sample">
                        @csrf
                        <div class="form-group">
                          <label for="producto_id">Articulo</label>
                          <select class="form-control" name="producto_id[]"multiple>
                             @foreach ($pro as $prod)
                            <option value="{{ $prod->id }}">{{$prod->nombre}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="proovedor_id">Proveedor</label>
                          <select class="form-control" name="proovedor_id" >
                             @foreach ($prov as $prove)
                            <option value="{{ $prove->id }}">{{$prove->nombre}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="cantidad">cantidad</label>
                          <input type="text" class="form-control" name="cantidad" value="">
                        </div>
                        <div class="form-group">
                          <label for="descripcion">descripcion</label>
                          <input type="text" class="form-control" name="descripcion" value="">
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
