@extends('layouts.main')
@section('contenido')
<div class='container'><br>
		<div class='row'>
			<div class='col-md-12'>
				<div class='card'>
					<div class='card-header'>
						Lista de productos
						<a href='{{route("productos.create")}}' class='btn btn-success btn-sm float-right' style="margin-left: 20px;">Nuevo Producto</a>
						<a href='{{route("descargarPDFproductos")}}' class="btn btn-sm btn-info btn-sm float-right" style="margin-left: 20px;">Descargar PDF</a>
						<a href='{{route("verPDFproductos")}}' class="btn btn-sm btn-info btn-sm float-right" target="_blank" >Ver PDF</a>
					</div>
					<div class='card-body'>
						@if(session('info'))
							<div class='alert alert-success'>
								{{session('info')}}
							</div>
						@endif
						<table class='table table-hover table-sm'>
							<thead>
								<th>Descripción</th>
								<th>Precio</th>
								<th>Acción</th>
							</thead>
							<tbody>
								@foreach($productos as $producto)
								<tr>
									<th>{{$producto->descripcion}}</th>
									<th>{{$producto->precio}}</th>
									<th>
										<a href='{{route("productos.editar", $producto->id)}}' class='btn btn-warning btn-sm'>Editar</a>
										<a href='javascript: document.getElementById("delete-{{$producto->id}}").submit()' class='btn btn-danger btn-sm'>Eliminar</a>

										<form id='delete-{{"$producto->id"}}' action='{{route("productos.destroy", $producto->id)}}'
										 method='POST'>
											@method('delete')
											@csrf
										</form>
									</th>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class='card-footer'>
						Bienvenido {{auth()->user()->name}}
						<a href='javascript:document.getElementById("logout").submit()' class='btn btn-danger btn-sm float-right'>Cerrar sesión</a>
						<form action='{{route("logout")}}' id='logout' style='display:none' method='POST'>
							@csrf
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
