@extends('layouts.star')

@section('contenido')
   <div class="col-lg-12 stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">Listado de Proveedores</h4>
            <p class="card-description">
                 Proveedores
            </p>
          <div class="table-responsive">
           <table class="table table-hover">
             <thead>
               <tr>
                 <th>Nombre</th>
                 <th>Codigo</th>
                 <th>Email</th>
                 <th>Acciones</th>
               </tr>
             </thead>
             <tbody>
                     @foreach ($proveedors as $proveedor)
                       <tr>
                         <td>{{ $proveedor->nombre}}</td>
                         <td>{{ $proveedor->codigo}}</td>
                         <td>{{ $proveedor->email}}</td>
                         <td>
                           <form action="{{ route('proovedors.restore') }}" method="POST">
                               <input type="hidden" name="proveedor_id" value="{{ $proveedor->id }}">
                               @csrf
                               <button type="submit" class="btn btn-sm btn-danger">Restaurar</button>
                           </form>
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
