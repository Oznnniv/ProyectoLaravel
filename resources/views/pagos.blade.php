@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Productos</title>
  <h1 class="text-primary">Historial de pagos</h1>
  <table class="table table-bordered" id="myTable">
      <thead>
        <tr>
            <th class="text-center">Fecha</th>
            <th class="text-center">Descripción</th>
            <th class="text-center">Tipo de pago</th>
            <th class="text-center">Monto</th>
        </tr>
      </thead>
      <tbody>
            <tr>
                <td class="text-center">18-02-20</td>
                <td class="text-center">Servicio 1</td>
                <td class="text-center">Paypal</td>
                <td class="text-center">$500</td>
            </tr>
            <tr>
                <td class="text-center">18-01-20</td>
                <td class="text-center">Servicio 2</td>
                <td class="text-center">Paypal</td>
                <td class="text-center">$600</td>
            </tr>
            <tr>
                <td class="text-center">25-02-20</td>
                <td class="text-center">Servicio 3</td>
                <td class="text-center">Paypal</td>
                <td class="text-center">$700</td>
            </tr>
      </tbody>
  </table>
</head>
</html>
@endsection