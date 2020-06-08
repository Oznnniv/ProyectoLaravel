@extends('plantillas.plantilla_cobrador')
@section('content')
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Estado de cuenta</title>
  <h1 class="text-primary">Historial de pagos</h1>
  <table class="table table-bordered" id="tableMonedas">
    <thead>
      <tr>
      	<th class="text-center">ID</th>
        <th class="text-center">Fecha de pago</th>
        <th class="text-center">Concepto</th>
        <th class="text-center">Cargos</th>
      </tr>
    </thead>
    <tbody>
      @forelse($suscriptor_id as $pago)
      <tr>
      	<td class="text-center">{{$pago->suscriptor_id}}</td>
        <td class="text-center">{{$pago->fecha_pago}}</td>
        <td class="text-center">{{$pago->concepto}}</td>
        <td class="text-center">{{$pago->monto}}</td>
      </tr>
      @empty
      <td colspan="3">No hay usuarios registrados.</td>
      @endforelse
    </tbody>
  </table>
  <div class="btn-group">
    <a href="/suscriptores" class="btn btn-secondary" >Atrás</a>
  </div>
</head>
</html>
@endsection