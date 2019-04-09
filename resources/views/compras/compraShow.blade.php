@extends('layouts.star')

@section('contenido')
   <div class="col-lg-12 stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">Listado de compras</h4>
            <p class="card-description">
                Compras
            </p>
          <div class="table-responsive">
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
                       <tr>
                         <td>{{ $compra->id}}</td>
                        <!-- <td>{{-- $compra->user_id--}}</td>-->
                         <td>{{ $compra->fecha_realizada}}</td>
                         <td>{{ $compra->user->nombre}} </td>
                          <td>{{ $compra->proovedor->nombre}}</td>
                          <td>{{ $compra->descripcion}}</td>
                          <td>{{ $compra->total}} </td>

                          <td>
                          @foreach ($compra->producto as $prod)
                            <li>{{ $prod->nombre }}</li>
                          @endforeach
                          </td>

                          <td>
                            <form class="forms-sample" action="{{route('compras.destroy', $compra->id )}}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                             @csrf
                             <br>
                            <button class="btn btn-inverse-danger btn-rounded btn-fw" name="button"> Borrar</button>
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
