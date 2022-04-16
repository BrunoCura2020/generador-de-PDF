<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Página principal</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Listado de productos
						<a href="{{route('crear')}}" class="btn btn-success bts-sm float-right">Nuevo producto</a>
						
						<a href="{{route('descargarPDF')}}" class="btn btn-success bts-sm float-right" style="margin-right: 20px">
						Descargar PDF</a>

						<a href="{{route('verPDF')}}" class="btn btn-success bts-sm float-right" style="margin-right: 20px">
						Ver PDF</a>
					</div>
					<div class="card-body">
						@if(session('info'))
							<div class="alert alert-success">
								{{session("info")}}
							</div>
						@endif
						<table class="table table-hover table-sm">
							<thead>
								<th>Descripción</th>
								<th>Prcio</th>
							</thead>

							<tbody>
								@foreach($productos as $producto)
								<tr>
									<td>{{$producto->descripcion}}</td>
									<td>{{$producto->precio}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>