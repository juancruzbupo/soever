
<h2>Enviado por: {!! $email !!}</h2>

<hr>

<h3>Ingrego telefono: </h3>

 @if($telefono != null ) {!! $telefono !!} @else No ingreso @endif

<br>

<h3>Mensaje:</h3>

{!! $mensaje !!}

<hr>