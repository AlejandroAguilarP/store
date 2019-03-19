@extends('layouts.star')

@section('contenido')
<form class="offset-1 col-9">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" name="inputEmail" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputNombre">Nombre</label>
      <input type="text" class="form-control" name="inputNombre" placeholder="Nombre">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ciudad</label>
      <input type="text" class="form-control" name="inputCity"  placeholder="Ciudad">
    </div>
    <div class="form-group col-md-6">
      <label for="inputMsj">Mensaje</label>
      <textarea class="form-control" name="inputMsj"  placeholder="Buen dia..."></textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-success">Enviar</button>
</form>
@endsection
