@extends('plantillas.plantilla_cobrador')
@section('content')
<form class="form-group" method="POST" action="{{route('servicio.details', $servicio->id)}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="card">
        <!--@if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Error</strong> Revise los campos obligatorios.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(Session::has('success'))
        <div class="alert alert-info">
            {{Session::get('success')}}
        </div>
        @endif-->
        <h3 class="card-header">Editando el servicio: {{$servicio->nombre}}</h3>
        <div class="card-body">
            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" disabled="disabled" name="nombre" id="nombre" class="form-control input-sm" value="{{$servicio->nombre}}">
            </div>
            <div class="form-group">
                <label>Descripción:</label>
                <input type="text" disabled="disabled" name="desc" id="desc" class="form-control input-sm" value="{{$servicio->desc}}">
            </div>
            <div class="form-group">
                <label>Precio:</label>
                <input type="text" disabled="disabled" name="precio" id="precio" class="form-control input-sm" value="{{$servicio->precio}}">
            </div>
            <div class="form-group">
                <label>Recargo:</label>
                <input type="text" disabled="disabled" name="recargo" id="recargo" class="form-control input-sm" value="{{$servicio->recargo}}">
            </div>
            <label>Imágenes:</label>
            <div class="row">
	            <div class="col-xs-6 col-sm-6 col-md-2">
	                <img src="/images/{{$servicio->img1}}" width="150" height="100">
	            </div>
	            <div class="col-xs-6 col-sm-6 col-md-2">
	                <img src="/images/{{$servicio->img2}}" width="150" height="100">
	            </div>
	            <div class="col-xs-6 col-sm-6 col-md-2">
	                <img src="/images/{{$servicio->img3}}" width="150" height="100">
	            </div>
	        </div>
        </div>
    </div>
    <div class="btn-group">
        <a href="{{ route('servicio.index') }}" class="btn btn-secondary" >Atrás</a>
    </div>
</form>
@endsection