@extends('layouts.star')

@section('contenido')
   <div class="col-lg-4 stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">Perfil de {{ $cliente->nombre }}</h4>
            <p class="card-description">
                Detalle:
            </p>
            <hr>
              <div class="media">
                <i class="mdi mdi-account icon-md text-info d-flex align-self-start mr-3"></i>
                <div class="media-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                     Nombre: <br>
                    {{ $cliente->nombre }}</font></font></p>
                </div>
              </div>
              <div class="media">
                <i class="mdi mdi-email icon-md text-success d-flex align-self-start mr-3"></i>
                <div class="media-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                     Email: <br>
                    {{ $cliente->email }}</font></font></p>
                </div>
              </div>
              <div class="media">
                <i class="mdi mdi-home-variant icon-md text-danger d-flex align-self-start mr-3"></i>
                <div class="media-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    Direccion: <br>
                    {{ $cliente->direccion }}</font></font></p>
                </div>
              </div>
              <div class="media">
                <i class="mdi mdi-city icon-md text-dark d-flex align-self-start mr-3"></i>
                <div class="media-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    Ciudad: <br>
                    {{ $cliente->ciudad }}</font></font></p>
                </div>
              </div>

              <hr>
            <a align="center"class="btn btn-inverse-warning btn-rounded btn-fw" href="{{ route ('clientes.edit', $cliente->id)}}">Editar</a>
            <form class="forms-sample" action="{{route('clientes.destroy', $cliente->id )}}" method="post">
              <input type="hidden" name="_method" value="DELETE">
             @csrf
             <br>
            <button class="btn btn-inverse-danger btn-rounded btn-fw" name="button"> Borrar</button>
            </form>
          </div>
      </div>
    </div>
@endsection
