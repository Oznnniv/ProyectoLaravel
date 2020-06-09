@extends('plantillas.plantilla_cobrador')
@section('content')
<div class="pull-left"><h3>Lista de suscriptores</h3></div>
<input type="text" id="myInput" onkeyup="Buscar()" placeholder="Buscar por nombre...">
<table id="mytable" class="table table-bordred table-striped">
  <thead>
    <th>Nombre</th>
    <th>Opciones</th>
  </thead>
  <tbody>
    @forelse($users as $user)
      <tr>
        <td>{{$user->name}}</td>
        <td>
          <a href="/suscriptores/{{$user->id}}/message" class="btn btn-primary" style="display: inline">Mensaje</a>
          <a href="/suscriptores/{{$user->id}}/detail" class="btn btn-primary" style="display: inline">Detalles</a>
          <a href="/suscriptores/{{$user->id}}/historial" class="btn btn-primary" style="display: inline">Historial</a></td>
      </tr>
    @empty
      <td colspan="4">No hay usuarios registrados.</td>
    @endforelse
  </tbody>
</table>
<script>
  function Buscar() {
    var tableReg = document.getElementById('mytable');
    var searchTextByDate = document.getElementById('myInput').value.toLowerCase();
    for (var i = 1; i < tableReg.rows.length; i++) {
      var cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
      var found = false;
      for (var j = 0; j <= 0; j++) { //MODIFICAR PARA CELDA
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