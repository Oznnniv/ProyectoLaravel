@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    <h1 class="text-primary">Lista de productos</h1>

	<table class="table table-bordered" id="tableMonedas">
  		<thead>
    		<tr>
       			<th class="text-center">Id</th>
        		<th class="text-center">Nombre</th>
        		<th class="text-center">Descripción</th>
    		</tr>
  		</thead>
  		<tbody>
	        	<tr>
	            	<td class="text-center">1</td>
	            	<td class="text-center">Producto</td>
	            	<td class="text-center">Pan</td>
	        	</tr>
  		</tbody>
	</table>
</head>
</html>
@endsection