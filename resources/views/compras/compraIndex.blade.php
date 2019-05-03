@extends('layouts.star')

@section('contenido')
   <div class="col-lg-12 stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">Listado de compras</h4>
            <p class="card-description">
                Compras
            </p>
        <div class="table-sm">
           <table class="table table-hover">
             <thead>
               <tr>
                 <th>Id</th>
              <!--   <th>Usuario</th>-->
                  <th>Fecha</th>
                  <th>Nombre User</th>
                  <th>Proveedor</th>
                  <th>Descripcion</th>
                  <th>Total</th>
                  <th>Articulos</th>
               </tr>
             </thead>
             <tbody>
                     @foreach ($compras as $compra)
                       <tr>
                         <td>
                          <a class= "btn btn-icons btn-rounded btn-inverse-success" href="{{route ('compras.show', $compra->id)}}">
                           {{ $compra->id}}
                         </a>
                         </td>
                        <!-- <td>{{-- $compra->user_id--}}</td>-->
                         <td>{{ $compra->fecha_realizada}}</td>
                         <td>{{ $compra->user->nombre}} </td>
                          <td>{{ $compra->proovedor->nombre }}</td>
                          <td>{{ $compra->descripcion}}</td>
                          <td>{{ $compra->total}} </td>

                          <td>
                          <ul class="list-group list-group-flush">
                          @foreach ($compra->producto as $prod)
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
