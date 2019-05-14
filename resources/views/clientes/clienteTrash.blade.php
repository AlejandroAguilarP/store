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
                 <th>Accion</th>
                 <th>Nombre</th>
                 <th>Direccion</th>
                 <th>Ciudad</th>
                 <th>Email</th>
               </tr>
             </thead>
             <tbody>
               @foreach ($clientes as $cliente)
               <tr>

                <td >
                  <form action="{{ route('clientes.restore') }}" method="POST">
                      <input type="hidden" name="cliente_id" value="{{ $cliente->id }}">
                      @csrf
                      <button type="submit" class="btn btn-sm btn-danger">Restaurar</button>
                  </form>
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
