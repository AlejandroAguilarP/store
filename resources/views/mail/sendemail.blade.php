<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Send emaik</title>
  </head>
  <body>

    <p>Hola {{ $e_cliente->nombre }} <br>

      Tu compra se realizó exitosamente
<br>
      Detalle: <br>

      @foreach ($e_venta->producto as $prod)
        <li class="list-group-item d-flex justify-content-between align-items-center">
          {{ $prod->nombre }}&nbsp;&nbsp;&nbsp;
          <span class="badge badge-primary badge-pill">Cantidad: {{ $prod->pivot->cantidad }}</span>
        </li>
      @endforeach
<br>
      Total: {{$e_venta->total}}

    </p>



  </body>
</html>
