@extends('plantillas.plantilla_cobrador')
@section('content')
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Estado de cuenta</title>
  <h1 class="text-primary">Historial de pagos</h1>
  <input type="text" id="myInput" onkeyup="Buscar()" placeholder="AAAA-MM-DD">
  <!--<input type="date" name="myInput" id="myInput" onchange="Buscar()">-->
  <table class="table table-bordered" id="tablePagos">
    <thead>
      <tr>
      	<th class="text-center">ID de pago</th>
        <th class="text-center">Fecha de pago</th>
        <th class="text-center">Concepto</th>
        <th class="text-center">Cargos</th>
        <th class="text-center">Estado de pago</th>
      </tr>
    </thead>
    <tbody>
      @forelse($suscriptor_id as $pago)
      <tr>
      	<td class="text-center">{{$pago->id}}</td>
        <td class="text-center">{{$pago->fecha_pago}}</td>
        <td class="text-center">{{$pago->concepto}}</td>
        <td class="text-center">{{$pago->monto}}</td>
        <td class="text-center">{{$pago_hecho}}</td>
      </tr>
      @empty
      <td colspan="5">No hay usuarios registrados.</td>
      @endforelse
    </tbody>
  </table>
  <div class="btn-group">
    <a href="/suscriptores" class="btn btn-secondary" >Atrás</a>
  </div>
</head>
</html>
<script>
  function Buscar() {
    var tableReg = document.getElementById('tablePagos');
    var searchTextByDate = document.getElementById('myInput').value.toLowerCase();
    for (var i = 1; i < tableReg.rows.length; i++) {
      var cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
      var found = false;
      for (var j = 1; j <= 1; j++) { //MODIFICAR PARA CELDA
        var compareWith = cellsOfRow[j].innerHTML.toLowerCase();
        if (searchTextByDate.length == 0 || (compareWith.indexOf(searchTextByDate) > -1)) {
          found = true;
        }
      }
      if (found) {
        tableReg.rows[i].style.display = '';
      } else {
        tableReg.rows[i].style.display = 'none';
      }
    }
  }
</script>
@endsection