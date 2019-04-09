@extends('layouts.star')

@section('contenido')
   <div class="col-lg-12 stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">ACCIONES DE PROOVEDOR</h4>
            <p class="card-description">

            </p>
          <div class="table-responsive">
           <table class="table table-hover">
             <thead>
               <tr>
                 <th>Id</th>
                 <th>Nombre</th>
                 <th>Codigo</th>
                 <th>Email</th>
                 <th>Acciones</th>
               </tr>
             </thead>
             <tbody>
                       <tr>
                         <td>{{ $proovedor->id}}</td>
                         <td>{{ $proovedor->nombre}}</td>
                         <td>{{ $proovedor->codigo}}</td>
                         <td>{{ $proovedor->email}}</td>
                         <td>
                           <a class="btn btn-inverse-warning btn-rounded btn-fw" href="{{ route ('proovedors.edit', $proovedor->id)}}">Editar</a>
                           <form class="forms-sample" action="{{route('proovedors.destroy', $proovedor->id )}}" method="post">
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
