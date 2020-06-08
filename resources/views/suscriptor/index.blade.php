@extends('plantillas.plantilla_suscriptor')
@section('content')
<div class="container text-center"><h1>Lista de servicios</h1></div>
<div class="container card text-center">
  <div class="card-body">
    @if($servicios->count())
    @foreach($servicios as $servicio)
    <div class="card text-center">
      <div class="row mt-2">
        <div class="col-4 libros">
          <div class="card-header">
            {{$servicio->nombre}}
          </div>
          <div clascs="card-body">
            <label>Costo: </label><h6 class="card-subtitle">{{$servicio->precio}}</h6>
            <label>Recargo: </label><h6 class="card-subtitle">{{$servicio->precio}}</h6>
            <label>Descripción: </label><p class="card-text">{{$servicio->desc}}</p>
            <p class="card-text">
              <small class="text-muted">
                <img src="/images/{{$servicio->img1}}" width="150" height="100">
                <img src="/images/{{$servicio->img2}}" width="150" height="100">
                <img src="/images/{{$servicio->img3}}" width="150" height="100">
              </small></p>
              <a href="{{ route('register') }}" class="btn btn-primary">SUSCRIBIRSE</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    @else
    <div>
      <a>No hay registros</a>
    </div>
    @endif
  </div>
</div>
@endsection