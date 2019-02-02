@extends('components.layout')
@section('title', 'Crear pelicula')
@section('content')
	<div class="content-create-character">
		<div class="row">
			@if(count($errors)>0)
				@php
					$flag = $errors->get('success')?"success":"danger";
				@endphp

				<div class="col-md-12 alert-{{$flag}}">
					@foreach($errors->all() as$error)
						<li>{{$error}}</li>
					@endforeach
				</div>
			@endif
		</div> 
		{!!Form::open(['route'=>'create.movie.add', 'method'=>'POST', 'enctype'=>'multipart/form-data'])!!}
		<div class="row">			
			
			<div class="col-md-12">
				<div class="inputs form-group">
					<label>Ingresar nombre de pelicula</label>
					<input type="text" class="form-control" value='nombre' id='nombre' name="nombre" required>
				</div>
			</div>
			
			<div class="col-md-12">
				<div class="inputs form-group">
					<label>Ingresar genero</label>
					<select name="genero" id="genero" class="form-control" required>
						<option value="Accion">Acción</option>
						<option value="Comedia">Comedia</option>
						<option value="Drama">Drama</option>
					</select>
				</div>
			</div>
			
			<button class="btn btn-primary" type="submit">Guardar</button>
			
		</div>
		{!!Form::close([''])!!}
	</div>
@endsection