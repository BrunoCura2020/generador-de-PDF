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
						Crear productos
						
					</div>
					<div class="card-body">
						<form action="{{route('lista')}}" method='POST'>
							@csrf <!--Gracias a la extension .blade, podemos usar el @csrf que sirve para verificar que el usuario autenticado sea realmente quien esta haciendo la peticion. Sin eso la peticio fallará-->
							<div class="form-group">
								<label for="">Descripción</label>
								<input type="text" class="form-control" name="descripcion">
							</div>

							<div class="form-group">
								<label for="">Precio</label>
								<input type="number" class="form-control" name="precio">
							</div>
							<button type="submit" class="btn btn-primary">Crear</button>
							<a href="{{route('inicio')}}" class="btn btn-danger">Cancelar</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>