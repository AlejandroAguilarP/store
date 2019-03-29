@extends('layouts.star')

@section('contenido')
          <div class="row">
            <div class="col-md-8 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif
                      <h4 class="card-title">Agregar Proveedor</h4>
                      <p class="card-description">
                        Agregue proveedor
                      </p>
                      @if(isset($proveedor))
                        <form  action="{{route('proovedors.update', $proveedor->id)}}" method="post" class="forms-sample">
                          <input type="hidden" name="_method" value="PATCH">
                      @else
                        <form  action="{{route('proovedors.store')}}" method="post" class="forms-sample">
                      @endif
                        @csrf
                        <div class="form-group">
                          <label for="nombre">Proveedor</label>
                          <input type="text" class="form-control" name="nombre" value="{{ $proveedor->nombre ?? ''}} {{ old('nombre') }}" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                          <label for="codigo">Codigo</label>
                          <input type="text" class="form-control" name="codigo" value="{{ $proveedor->codigo ?? ''}} {{ old('codigo') }}"placeholder="121212312">
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" name="email" value="{{ $proveedor->email ?? ''}} {{ old('email') }}" placeholder="example@gmail.com">
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
