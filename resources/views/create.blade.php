@extends('plantillas.plantilla_cobrador')
@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
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
			@endif
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Nuevo Libro</h3>
				</div>
				<div class="panel-body">
					<div class="table-container">
						<form method="POST" action="{{ route('servicio.store') }}"  role="form" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="precio" id="precio" class="form-control input-sm" placeholder="Precio">
									</div>
								</div>
							</div>
							<div class="form-group">
								<textarea name="desc" class="form-control input-sm" placeholder="Descripción"></textarea>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col">
									<input type="text" name="recargo" id="recargo" class="form-control input-sm" placeholder="Recargo">
								</div>
							</div>
							<div class="form-group">
						            <label for="">Selecciona imagen para subir:</label>
						            <input type="file" name="img1">
							</div>
							<div class="form-group">
						            <label for="">Selecciona imagen para subir:</label>
						            <input type="file" name="img2">
							</div>
							<div class="form-group">
						            <label for="">Selecciona imagen para subir:</label>
						            <input type="file" name="img3">
							</div>
								<button type="submit" value="Guardar" class="btn btn-success btn-block">Guardar</button>
								<a href="{{ route('servicio.index') }}" class="btn btn-info btn-block" >Atrás</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection