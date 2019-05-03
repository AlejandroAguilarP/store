@extends('layouts.star')
@section('contenido')
   <div class="col-lg-12 stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">Listado de productos</h4>
            <p class="card-description">
                 Articulos
            </p>
          <div class="table-md table-responsive">
           <table class="table table-hover">
             <thead>
               <tr>
                 <th>Imagen</th>
                 <th>Nombre</th>
                 <th>Descripcion</th>
                 <th>Precio</th>
                 <th>Cantidad</th>
                 <th>Acciones</th>
               </tr>
             </thead>
             <tbody>
                     @foreach ($productos as $producto)
                       <tr>
                         <td>{{--$producto->id--}}
                           @foreach ($producto->archivos as $img)
                            <img src="{{ Storage::url($img->img) }}">
                            @endforeach
                        </td>
                         <td>{{ $producto->nombre}}</td>
                         <td>{{ $producto->descripcion}}</td>
                         <td>${{ $producto->precio}}</td>
                         <td>{{ $producto->cantidad}}</td>
                         <td>
                           <a class= "btn btn-inverse-success btn-rounded btn-fw" href="{{route ('productos.show', $producto->id)}}">Detalle</a>
                         </td>
                       </tr>
                     @endforeach
                   </tbody>
         </table>
        </div>
       </div>
      </div>
     </div>
@endsection
