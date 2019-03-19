@extends('layouts.star')

@section('contenido')
   <div class="col-lg-12 stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">Detalle producto</h4>
            <p class="card-description">

            </p>
          <div class="table-responsive">
           <table class="table table-hover">
             <thead>
               <tr>
                 <th>Id</th>
                 <th>Nombre</th>
                 <th>Descripcion</th>
                 <th>Precio</th>
                 <th>Acciones</th>
               </tr>
             </thead>
             <tbody>
                       <tr>
                         <td>{{ $producto->id}}</td>
                         <td>{{ $producto->nombre}}</td>
                         <td>{{ $producto->descripcion}}</td>
                         <td>${{ $producto->precio}}</td>
                         <td>
                           <a class="btn btn-outline-warning" href="{{ route ('productos.edit', $producto->id)}}">Editar</a>
                           <form class="forms-sample" action="{{route('productos.destroy', $producto->id )}}" method="post">
                             <input type="hidden" name="_method" value="DELETE">
                            @csrf
                           <button class="btn btn-outline-danger" name="button"> Borrar</button>
                           </form>
                         </td>

                       </tr>
                   </tbody>
         </table>
        </div>
       </div>
      </div>
     </div>
@endsection
