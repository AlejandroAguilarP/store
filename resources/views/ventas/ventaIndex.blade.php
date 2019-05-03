@extends('layouts.star')

@section('contenido')
   <div class="col-lg-12 stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">Listado de ventas</h4>
            <p class="card-description">
                Ventas
            </p>
        <div class="table-sm">
           <table class="table table-hover">
             <thead>
               <tr>
                 <th>Id</th>
              <!--   <th>Usuario</th>-->
                  <th>Fecha</th>
                  <th>Nombre User</th>
                  <th>Cliente</th>
                  <th>Descripcion</th>
                  <th>Total</th>
                  <th>Articulos</th>
               </tr>
             </thead>
             <tbody>
                     @foreach ($ventas as $venta)
                       <tr>
                         <td>
                          <a class= "btn btn-icons btn-rounded btn-inverse-success" href="{{route ('ventas.show', $venta->id)}}">
                           {{ $venta->id}}
                         </a>
                         </td>
                        <!-- <td>{{-- $venta->user_id--}}</td>-->
                         <td>{{ $venta->fecha_realizada}}</td>
                         <td>{{ $venta->user->nombre}} </td>
                          <td>{{ $venta->cliente->nombre}}</td>
                          <td>{{ $venta->descripcion}}</td>
                          <td>{{ $venta->total}} </td>

                          <td>
                          <ul class="list-group list-group-flush">
                          @foreach ($venta->producto as $prod)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              {{ $prod->nombre }}&nbsp;&nbsp;&nbsp;
                              <span class="badge badge-primary badge-pill">{{ $prod->pivot->cantidad }}</span>
                            </li>
                          @endforeach
                        </ul>
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
