@extends('layouts.star')

@section('contenido')
  <div class="row">
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-statistics">
                  <div class="card-body">
                    <div class="clearfix">
                      <div class="float-left">
                        <i class="mdi mdi-cube text-danger icon-lg"></i>
                      </div>
                      <div class="float-right">
                        <p class="mb-0 text-right">Total de tus ventas</p>
                        <div class="fluid-container">
                          <h3 class="font-weight-medium text-right mb-0">${{ $total }}</h3>
                        </div>
                      </div>
                    </div>
                    <p class="text-muted mt-3 mb-0">
                      <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> {{ $porcentaje }}% de las ventas totales
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-receipt text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Total de las ventas</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">$ {{ $totales }}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Ventas totales
                  </p>
                </div>
              </div>
            </div>
    </div>

    <div class="col-lg-12 stretch-card">
       <div class="card">
           <div class="card-body">
             <h4 class="card-title">Listado de ventas</h4>
             <p class="card-description">
                 Ventas de {{ Auth::user()->nombre}}
             </p>
         <div class="table-sm">
            <table class="table table-hover">
              <thead>
                <tr>
                   <th>Fecha</th>
                   <th>Usuario</th>
                   <th>Cliente</th>
                   <th>Descripcion</th>
                   <th>Total</th>
                   <th>Articulos</th>
                </tr>
              </thead>
              <tbody>
                      @foreach ($ventas as $venta)
                        <tr>
                          <td>{{ $venta->fecha_realizada}}</td>
                          <td>{{$venta->user->nombre}} </td>
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
