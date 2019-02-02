@extends('components.layout')
@section('title', 'Lista personajes')
@section('content')
	<div class="form-control">
		<table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Actor</th>
		      <th scope="col">Pelicula</th>	      
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($actors as $actor)
				<tr>
			      <th scope="row">#</th>
			      <td>{{$actor->heroe}}</td>
			      <td>{{($actor->movie)?$actor->movie->nombre:"..."}}</td>		      
			    </tr>
		  	@endforeach	    	   
		  </tbody>
		</table>	
	</div>
	
@endsection