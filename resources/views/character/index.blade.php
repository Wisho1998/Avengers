@extends('components.layout')
@section('title', 'Crear personaje')
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
		{!!Form::open(['route'=>'create.character.add', 'method'=>'POST', 'enctype'=>'multipart/form-data'])!!}
		<div class="row">			
			<div class="col-md-12">
				
				<div class="inputs form-group">
					<label>Pelicula</label>
					<select name="pelicula" id="pelicula" class="form-control">
						
						@foreach($movies as $movie)
							<option value="{{$movie->id}}">{{$movie->nombre}}</option>
						@endforeach	
					
					</select>
				</div>

			</div>
			<div class="col-md-12">
				<div class="inputs form-group">
					<label>Ingresar nombre del heroe</label>
					<input type="text" class="form-control" name="heroe" id="heroe">
				</div>
			</div>
			<div class="col-md-12">
				<div class="inputs form-group">
					<label>Ingresar nombre del actor</label>
					<input type="text" class="form-control" name="real_name" id="real_name">
				</div>
			</div>
			<div class="col-md-12">
				<div class="inputs form-group">
					<label>Ingresar descripción del personaje</label>
					<textarea class="form-control" name="description" id="description" rows="6"></textarea>
				</div>
			</div>
			<div class="col-md-12">
				<div class="inputs form-group">
					<label>Ingresar imagen del personaje</label>
					<input class="form-control" type="file" id="image" name="image">
				</div>
			</div>
			<button class="btn btn-primary" type="submit">Guardar</button>
			
		</div>
		{!!Form::close([''])!!}
	</div>
@endsection