@extends('layouts.star')

@section('contenido')
   <div class="col-lg-10 stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">{{ $producto->nombre }}</h4>
            <div align="center"id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                 @foreach ($producto->archivos as $img)
                 <div class="carousel-item active">
                    <img class="d-block w-50" src="{{ Storage::url($img->img) }}" alt="First slide">
                 </div>
                 <div class="carousel-item">
                   <img class="d-block w-50" src="{{ Storage::url($img->img) }}" alt="Second slide">
                 </div>
                 @endforeach
               </div>
              </div>
              <p class="row">
              <div class="media">
                <i class=" mdi mdi-comment-text icon-md text-dark d-flex align-self-start mr-3"></i>
                <div class="media-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    Descripcion: <br>
                    {{ $producto->descripcion }}</p>
                </div>
              </div>
              <div class="media">
                <i class=" mdi mdi-cash-multiple icon-md text-success d-flex align-self-start mr-3"></i>
                <div class="media-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    Precio: <br>
                    ${{ $producto->precio }}</p>
                </div>
              </div>
              <div class="media">
                <i class=" mdi mdi-sort-numeric icon-md text-warning d-flex align-self-start mr-3"></i>
                <div class="media-body">
                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    Cantidad: <br>
                    {{ $producto->cantidad }}</p>
                </div>
              </div>
              <div class="row">
                <div class="col-3">
                  <a class="btn btn-inverse-warning btn-rounded btn-fw" href="{{ route ('productos.edit', $producto->id)}}">Editar</a>
                </div>
                <div class="col-3">
                  <a class="btn btn-inverse-info btn-rounded btn-fw" href="{{ route ('productos.photo', $producto->id)}}">Eliminar Imagen</a>
                </div>
                <div class="col-3">
                  <form class="forms-sample" action="{{route('productos.destroy', $producto->id )}}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                   @csrf
                  <button class="btn btn-inverse-danger btn-rounded btn-fw" name="button"> Borrar</button>
                  </form>
                </div>
              </div>
            </p>
          </p>
       </div>
      </div>
     </div>
@endsection
