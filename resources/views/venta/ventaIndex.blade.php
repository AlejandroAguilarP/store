@extends('layouts.app')

@section('content')
<div class="row">

  <div class="col-8 offset-2">
    <h1>Ventas de {{ session('apodo')}}</h1>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Id</th>
          <th>Fecha realizacion</th>
          <th>Descripcion</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($ventas as $venta)
          <tr>
            <td>{{ $venta->id}}</td>
            <td>{{ $venta->fecha_realizada}}</td>
            <td>{{ $venta->descripcion}}</td>
            <td>{{ $venta->total}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>

  </div>

</div>
@endsection
