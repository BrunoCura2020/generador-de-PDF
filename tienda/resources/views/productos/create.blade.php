<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Productos</title>
</head>
<body>
	<div class='container'><br>
		<div class='row'>
			<div class='col-md-12'>
				<div class='card'>
					<div class='card-header'>
						Crear producto
					</div>
					<div class='card-body'>
						<form action='{{route("productos.store")}}' method='POST'>
							<!--@crfs: se utiliza porque tenemos la extension blade-->
							@csrf
							<div class='form-group'>
								<label for=''>Descripción</label>
								<input type='text' class='form-control' name='descripcion'>
							</div>

							<div class='form-group'>
								<label for=''>Precio</label>
								<input type='number' class='form-control' name='precio'>
							</div>

							<button type='submit' class='btn btn-primary'>Guardar</button>
							<a href='{{route("productos.index")}}' class='btn btn-danger'>Cancelar</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>