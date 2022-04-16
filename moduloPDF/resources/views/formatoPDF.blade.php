@extends('layout.main')
@section('contenido')
	<div class="container">
		<h1>FACTURA</h1>
		<table class="table">
		  <thead>
		    <tr class="bg-danger">
		      <th scope="col">#</th>
		      <th scope="col">Descripción</th>
		      <th scope="col">Precio</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($productos as $producto)
			    <tr>
			      <th scope="row">{{$producto->id}}</th>
			      <td>{{$producto -> descripcion}}</td>
			      <td>{{$producto -> precio}}</td>
			    </tr>
			@endforeach
		  </tbody>
		</table>
	</div>
@endsection
