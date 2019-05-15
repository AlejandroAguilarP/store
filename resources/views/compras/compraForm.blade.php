@extends('layouts.star')


@section('contenido')
<!--  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
          <div class="row">
            <div class="col-md-9 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      @include('partials.formErrors')
                      <h4 class="card-title">Agregar Productos</h4>
                      <p class="card-description">
                        Compra
                      </p>
                        <form  action="{{route('compras.store')}}" method="post" class="forms-sample">
                        @csrf
                    <div class="table-responsive">
                      <table class="form-group" id="dynamic_field">
                        <thead>
                          <th class="col-md-4">Articulo</th>
                          <th class="col-md-4">Cantidad</th>

                        </thead>
                        <tbody>
                        <tr>
                          <td class="col-4">
                          <!--<label for="producto_id">Articulo</label>-->
                          <select class="form-control" name="producto_id[]">
                             @foreach ($pro as $prod)
                            <option value="{{ $prod->id }}">{{$prod->nombre}}</option>
                            @endforeach
                          </select>
                          </td>

                        <td class="col-md-4">
                          <!--<label for="cantidad">cantidad</label>-->
                          <input type="number" class="form-control" name="cantidad[]" value="">
                        </td>
                      <td class="col-md-6">
                      <button type="button" name="add" id="add" class="btn btn-icons btn-rounded btn-success">+</button>
                      </td>
                      </tr>
                      </tbody>
                      </table>
                    </div>
                        <div class="form-group">
                          <label for="proovedor_id">Proveedor</label>
                          <select class="form-control" name="proovedor_id" >
                             @foreach ($prov as $prove)
                            <option value="{{ $prove->id }}">{{$prove->nombre}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="descripcion">descripcion</label>
                          <input type="text" class="form-control" name="descripcion" value="{{ old('descripcion') }}">
                        </div>
                        <button type="submit" class="btn btn-inverse-success btn-rounded btn-fw">Aceptar</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


<script type="text/javascript">
    $(document).ready(function(){
      var i=1;


      $('#add').click(function(){
           i++;
           $('#dynamic_field').append('<tr id="row'+i+'"><td class="col-md-6"><select class="form-control" name="producto_id[]">@foreach($pro as $prod)<option value="{{ $prod->id }}">{{$prod->nombre}}</option>@endforeach</option></td><td class="col-md-6"> <input type="number" class="form-control" name="cantidad[]" value=""></td><td class="form-group col-md-6"><button type="button" name="remove" id="'+i+'" class="btn btn-icons btn-rounded btn-inverse-danger btn_remove">x</button></td></tr>');
      });


      $(document).on('click', '.btn_remove', function(){
           var button_id = $(this).attr("id");
           $('#row'+button_id+'').remove();
      });
    });
</script>

@endsection
