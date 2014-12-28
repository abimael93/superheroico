<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Plantilla</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/mis-estilos.css">
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
			<?php 

				$email = $_POST["email"];
				$pass = $_POST["password"];

				if($email == "cesar@gmail.com" && $pass === "123")
				{?>
				<div class="well">
					<h3>Bienvenido CESAR</h3>
					<p><a href="login.php">Salir</a></p>
				</div>
			<?php 
				}
				else
				{
			?>
					<div class="alert alert-danger">
						El Email o Contraseña son incorrectos
						<a href="login.php">Volver</a>						
					</div>
			<?php
				}
			?>
			</div>
			
			
		</div>
	</div>
	<script src="js/jquery.js"></script>	
	<script src="js/bootstrap.js"></script>	
</body>
</html>