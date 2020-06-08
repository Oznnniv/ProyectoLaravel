@extends('plantillas.plantilla_cobrador')
@section('content')
<div class="card">
  <h3 class="card-header">Datos de: {{$users->name}}</h3>
  <div class="card-body">
    <div class="form-group">
      <label>ID:</label>
      <input type="text" disabled="disabled" name="nombre" id="nombre" class="form-control input-sm" value="{{$users->id}}">
    </div>
    <div class="form-group">
      <label>Nombre:</label>
      <input type="text" disabled="disabled" name="recargo" id="recargo" class="form-control input-sm" value="{{$users->name}}">
    </div>
    <div class="form-group">
      <label>Dirección:</label>
      <input type="text" disabled="disabled" name="recargo" id="recargo" class="form-control input-sm" value="{{$users->dir}}">
    </div>
    <div class="form-group">
      <label>RFC:</label>
      <input type="text" disabled="disabled" name="recargo" id="recargo" class="form-control input-sm" value="{{$users->rfc}}">
    </div>
    <div class="btn-group">
    <a href="/suscriptores" class="btn btn-secondary" >Atrás</a>
  </div>
  </div>

  </div>
@endsection
