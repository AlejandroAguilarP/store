@extends('layouts.star')

@section('contenido')
<div class="row">
  <div class="col-10 offset-1 d-flex align-items-stretch grid-margin">
    <div class="row flex-grow">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Contactenos</h4>
            <form class="form-samples">
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
              <button type="submit" class="btn btn-inverse-success btn-rounded btn-fw">Enviar</button>
            </form>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
