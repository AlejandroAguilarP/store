@extends('layouts.star')

@section('contenido')
   <div class="col-lg-12 stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">Lista de Usuarios</h4>
            <p class="card-description">
                Usuarios
            </p>
          <div class="table-responsive">
           <table class="table table-hover">
             <thead>
               <tr>
                 <th > </th>
                 <th>Foto</th>
                 <th>Nombre</th>
                 <th>Rol</th>
                 <th>Codigo</th>
                 <th>Email</th>
               </tr>
             </thead>
             <tbody>
                     @foreach ($users as $user)
                       <tr>

                           <td align="center" >
                             @can('view', $user)
                             <a class= "btn btn-icons btn-rounded btn-inverse-info" href="{{route ('users.show', $user->id)}}">{{ $user->id}}</a>
                              @endcan
                              @cannot ('view', $user)
                                {{ $user->id }}
                              @endcannot
                           </td>

                         <td>
                         @foreach ($user->archivos as $img)
                          <img src="{{ Storage::url($img->img) }}">
                          @endforeach
                          </td>
                         <td>{{ $user->nombre}} </td>
                         <td>{{ $user->rol }}</td>
                          <td>{{ $user->codigo}}</td>
                          <td>{{ $user->email}}</td>
                       </tr>
                     @endforeach
                   </tbody>
         </table>
        </div>
       </div>
      </div>
     </div>
@endsection
