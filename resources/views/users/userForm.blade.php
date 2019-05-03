@extends('layouts.star')

@section('contenido')
          <div class="row">
            <div class="col-md-8 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      @include('partials.formErrors')
                      <h4 class="card-title">Editar</h4>
                      <p class="card-description">
                        Editar perfil
                      </p>
                      @if(isset($user))
                        <form  action="{{route('users.update', $user->id)}}"enctype="multipart/form-data"
                           method="post" class="forms-sample">
                          <input type="hidden" name="_method" value="PATCH">
                      @endif
                        @csrf
                        <div class="form-group">
                          <label for="nombre">Nombre</label>
                          <input type="text" class="form-control" name="nombre" value="{{ isset($user) ? $user->nombre : old('nombre') }}" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="avatar">Imagen</label>
                            <input type="file" class="form-control"name="avatar" value="">
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
