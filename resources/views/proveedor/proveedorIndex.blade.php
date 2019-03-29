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
                 <th>Codigo</th>
                 <th>Email</th>
                 <th>Acciones</th>
               </tr>
             </thead>
             <tbody>
                     @foreach ($proveedors as $proveedor)
                       <tr>
                         <td>{{ $proveedor->id}}</td>
                         <td>{{ $proveedor->nombre}}</td>
                         <td>{{ $proveedor->codigo}}</td>
                         <td>{{ $proveedor->email}}</td>
                         <td>
                           <a class= "btn btn-inverse-success btn-rounded btn-fw" href="{{route ('proovedors.show', $proveedor->id)}}">Detalle</a>
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
