@extends('layouts.star')

@section('contenido')
<div class="main-panel">
 <div class="content-wrapper">
   <h1>Hola {{ session('apodo')}}</h1>
 </div>
</div>
@endsection
