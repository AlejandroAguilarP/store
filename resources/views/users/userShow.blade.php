@extends('layouts.star')

@section('contenido')
   <div class="col-lg-4 stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">Perfil de {{ $user->nombre }}</h4>
            <p class="card-description">
                Detalle de tu perfil
            </p>
              @foreach ($user->archivos as $img)
              <div class="carousel-item active">
                 <img width="90%"class="d-block" src="{{ Storage::url($img->img) }}" alt="First slide" style="border-radius: 10%" >
              </div>
              @endforeach
              <hr>
                <div class="media">
                  <i class="mdi mdi-account icon-md text-info d-flex align-self-start mr-3"></i>
                  <div class="media-body">
                    <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                       Nombre: <br>
                      {{ $user->nombre }}</font></font></p>
                  </div>
                </div>
                <div class="media">
                  <i class="mdi mdi-email icon-md text-success d-flex align-self-start mr-3"></i>
                  <div class="media-body">
                    <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                       Email: <br>
                      {{ $user->email }}</font></font></p>
                  </div>
                </div>
                <div class="media">
                  <i class="mdi mdi-numeric icon-md text-danger d-flex align-self-start mr-3"></i>
                  <div class="media-body">
                    <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                      Codigo: <br>
                      {{ $user->codigo }}</font></font></p>
                  </div>
                </div>
                <div class="media">
                  <i class="mdi mdi-emoticon-poop icon-md text-dark d-flex align-self-start mr-3"></i>
                  <div class="media-body">
                    <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                      Tipo: <br>
                      {{ $user->rol }}</font></font></p>
                  </div>
                </div>

                <hr>
            <a align="center"class="btn btn-inverse-warning btn-rounded btn-fw" href="{{ route ('users.edit', $user->id)}}">Editar</a>
          </div>
      </div>
    </div>
@endsection
