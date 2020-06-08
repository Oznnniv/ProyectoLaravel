@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<fieldset>
		<legend>Agregar servicio</legend>
	  	<p>Nombre: <input type="text" name="nombre" size="30"></p>
	  	<p>Descripción: <textarea name="content" placeholder="Descripción..."></textarea></p>
	  	<p>Monto: <input type="number" name="monto"></p>
	  	<form name="formulario" method="post" action="http://pagina.com/send.php"
      	enctype="multipart/form-data"> <!-- ¡No olvides el enctype! -->
  		<!-- Campo de selección de archivo -->
  			<input type="file" name="adjunto" accept=".pdf,.jpg,.png" multiple>
		</form>
	</fieldset>
	<button>
		<a href="">Guardar</a>
	</button>
	<button>
		<a href="{{ url('/servicios') }}">Cancelar</a>
	</button>
</body>
</html>

@endsection