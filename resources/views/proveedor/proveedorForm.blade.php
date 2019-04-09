@extends('layouts.star')

@section('contenido')
          <div class="row">
            <div class="col-md-8 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      @include('partials.formErrors')
                      <h4 class="card-title">Agregar Proveedor</h4>
                      <p class="card-description">
                        Agregue proovedor
                      </p>
                      @if(isset($proovedor))
                        <form  action="{{route('proovedors.update', $proovedor->id)}}" method="post" class="forms-sample">
                          <input type="hidden" name="_method" value="PATCH">
                      @else
                        <form  action="{{route('proovedors.store')}}" method="post" class="forms-sample">
                      @endif
                        @csrf
                        <div class="form-group">
                          <label for="nombre">Proveedor</label>
                          <input type="text" class="form-control" name="nombre" value="{{ isset($proovedor) ? $proovedor->nombre : old('nombre') }}" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                          <label for="codigo">Codigo</label>
                          <input type="text" class="form-control" name="codigo" value="{{ isset($proovedor) ? $proovedor->codigo : old('codigo') }}"placeholder="121212312">
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" name="email" value="{{ isset($proovedor) ? $proovedor->email : old('email') }}" placeholder="example@gmail.com">
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
