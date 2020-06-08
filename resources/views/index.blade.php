@extends('plantillas.plantilla_cobrador')
@section('content')
<div class="pull-left"><h3>Lista de servicios</h3></div>
<div class="btn-group">
  <a href="{{ route('servicio.create') }}" class="btn btn-success" >Añadir servicio</a>
</div>
<table id="mytable" class="table table-bordred table-striped">
  <thead>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Precio</th>
    <th>Recargo</th>
    <th>Imágenes</th>
    <th>Opciones</th>
  </thead>
  <tbody>
    @if($servicios->count())
    @foreach($servicios as $servicio)
    <tr>
      <td>{{$servicio->nombre}}</td>
      <td>{{$servicio->desc}}</td>
      <td>{{$servicio->precio}}</td>
      <td>{{$servicio->recargo}}</td>
      <td><img src="/images/{{$servicio->img1}}" width="150" height="100"><img src="/images/{{$servicio->img2}}" width="150" height="100"><img src="/images/{{$servicio->img3}}" width="150" height="100"></td>
      <td>
        <a href="/servicio/{{$servicio->id}}/edit" class="btn btn-primary" style="display: inline">Editar</a>
        <a href="/servicio/{{$servicio->id}}/details" class="btn btn-secondary"  style="display: inline">Detalles</a>
        <form action="/servicio/{{$servicio->id}}" method="post" style="display: inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        <a href="servicio/{{$servicio->id}}/mensaje" class="btn btn-secondary"  style="display: inline">Mensaje</a>
      </td>
    </tr>
    @endforeach
    @else
    <tr>
      <td colspan="6">No hay registros</td>
    </tr>
    @endif
  </tbody>
</table>
{{ $servicios->links() }}
@endsection