@extends('layouts.star')

@section('contenido')
   <div class="col-lg-12 stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">Lista de clientes</h4>
            <p class="card-description">
                Clientes
            </p>
          <div class="table-responsive">
           <table class="table table-hover">
             <thead>
               <tr>
                 <th>ID</th>
                 <th>Nombre</th>
                 <th>Direccion</th>
                 <th>Ciudad</th>
                 <th>Email</th>
               </tr>
             </thead>
             <tbody>
               @foreach ($clientes as $cliente)
               <tr>

                <td align="center" >
                   <a class= "btn btn-icons btn-rounded btn-inverse-info" href="{{route ('clientes.show', $cliente->id)}}">{{ $cliente->id}}</a>
                </td>
                <td>{{ $cliente->nombre}} </td>
                <td>{{ $cliente->direccion}}</td>
                <td>{{ $cliente->ciudad}}</td>
                <td>{{ $cliente->email}}</td>
               </tr>
             @endforeach
           </tbody>
         </table>
        </div>
       </div>
      </div>
     </div>
@endsection
