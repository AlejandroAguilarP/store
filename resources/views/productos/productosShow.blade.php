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
              <p>
                Descripcion: <br> <br>
                {{ $producto->descripcion }}
                <hr>
              </p>
              <p>
                Precio: <br> <br>
                ${{ $producto->precio }}
                <hr>
              </p>
              <p>
                Cantidad: <br> <br>
                {{ $producto->cantidad }}
                <hr>
              </p>
              <p class="row">
              <div class="form-control">
                <a class="btn btn-inverse-warning btn-rounded btn-fw" href="{{ route ('productos.edit', $producto->id)}}">Editar</a>
              </div>
              <div class="form-control">
                <form class="forms-sample" action="{{route('productos.destroy', $producto->id )}}" method="post">
                  <input type="hidden" name="_method" value="DELETE">
                 @csrf
                <button class="btn btn-inverse-danger btn-rounded btn-fw" name="button"> Borrar</button>
                </form>
              </div>
            </p>
          </p>
       </div>
      </div>
     </div>
@endsection
