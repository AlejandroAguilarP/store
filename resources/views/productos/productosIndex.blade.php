@extends('layouts.star')

@section('contenido')
<div class="main-panel">
 <div class="content-wrapper">
   <h1>LISTADO DE PRODUCTOS</h1>
   <table class="table table-hover">
     <thead>
       <tr>
         <th>Id</th>
         <th>Nombre</th>
         <th>Descripcion</th>
         <th>Precio</th>
       </tr>
     </thead>
     <tbody>
       @foreach ($productos as $producto)
         <tr>
           <td>{{ $producto->id}}</td>
           <td>{{ $producto->nombre}}</td>
           <td>{{ $producto->descripcion}}</td>
           <td>{{ $producto->precio}}</td>
         </tr>
       @endforeach
     </tbody>
   </table>
 </div>
</div>
@endsection
