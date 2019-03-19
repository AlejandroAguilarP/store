@extends('layouts.star')

@section('contenido')
   <div class="col-lg-12 stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">Listado de productos</h4>
            <p class="card-description">
                 Articulos
            </p>
          <div class="table-responsive">
           <table class="table table-hover">
             <thead>
               <tr>
                 <th>Id</th>
                 <th>Nombre</th>
                 <th>Descripcion</th>
                 <th>Precio</th>
               </tr>
             </thead>
             <tbody>
                     @foreach ($productos as $producto)
                       <tr>
                         <td>{{ $producto->id}}</td>
                         <td>{{ $producto->nombre}}</td>
                         <td>{{ $producto->descripcion}}</td>
                         <td>{{ $producto->precio}}</td>
                       </tr>
                     @endforeach
                   </tbody>
         </table>
        </div>
       </div>
      </div>
     </div>
@endsection
