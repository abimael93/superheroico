<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nav Bar</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/mis-estilos.css">
</head>
<body> 
<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fuid">
				
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ejemplo">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>

					</button>
					<a href="#" class="navbar-brand">Tutorial</a>
				</div>
			</div>

			<div class="navbar-collapse" id="ejemplo">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Inicio</a></li>
					<li><a href="#">Contactos</a></li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"></a>Action</li>							
							<li><a href="#"></a>Another Action</li>							
							<li><a href="#"></a>Something else here</li>
							<li class="divider"></li>							
							<li><a href="#">Separed Linked</a></li>
							<li class="divider"></li>							
							<li><a href="#">One More Separed Linked</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Link</a></li>					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"></a>Action</li>							
							<li><a href="#"></a>Another Action</li>							
							<li><a href="#"></a>Something else here</li>
							<li class="divider"></li>							
							<li><a href="#">Separed Linked</a></li>
						</ul>
					</li>
				</ul>

			</div>
			
		</nav>	
	</div>

	<script src="js/jquery.js"></script>	
	<script src="js/bootstrap.js"></script>	
</body>
</html>