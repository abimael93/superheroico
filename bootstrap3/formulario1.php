<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Elementos de Formulario</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/mis-estilos.css">
</head>
<body>
	
		<div class="container">
			<form action="">

				<div class="form-group">
					<label for="email">Email</label>		
					<input type="email" class="form-control" id="email" placeholder="Tu email" name="email">
				</div>

				<div class="form-group">
					<label for="password">Contraseña</label>		
					<input type="password" class="form-control" id="password" placeholder="Contraseña" name="contraseña">				
				</div>

				<div class="form-group">
					<label for="File">Archivo</label>		
					<input type="file"id="File">
					<p class="help-block">Texto alternativo</p>				
				</div>

				<div class="checkbox">
					<label>
						<input type="checkbox">Recordarme
					</label>
				</div>

				<div class="radio">
					<label>
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="opcion1" checked>
						opcion1
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="opcion2">
						opcion2
					</label>
				</div>

				<button type="submit" class="btn btn-primary">Enviar</button>
			</form>

		</div>
	

	<script src="js/jquery.js"></script>	
	<script src="js/bootstrap.js"></script>	
</body>
</html>