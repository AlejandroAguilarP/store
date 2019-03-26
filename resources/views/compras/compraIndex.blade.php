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
                 <th>Usuario</th>
                 <th>Total</th>
                  <th>Nombre</th>
               </tr>
             </thead>
             <tbody>
                     @foreach ($compras as $compra)
                       <tr>
                         <td>{{ $compra->id}}</td>
                         <td>{{ $compra->user_id}}</td>
                         <td>{{ $compra->total}}</td>
                         <td>{{ $compra->user->nombre}} </td>
                       </tr>
                     @endforeach
                   </tbody>
         </table>
        </div>
       </div>
      </div>
     </div>
@endsection
