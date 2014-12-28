<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de tareas</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/mis-estilos.css">
	<link rel="stylesheet" href="css/ejemplos.css">

</head>
<body ng-app>

	<h1>Listado de Tareas</h1>

	<div ng-controller="ControladorTareas">
		<span>{{restantes()}} de {{tareas.length}}</span>
		[ <a class="text-danger" href="" ng-click="eliminar()">eliminar</a>]
		<ul class="unstyled">
			<li ng-repeat="tarea in tareas">
				<input type="checkbox" ng-model="tarea.hecho">
				<span class="hecho-{{tarea.hecho}}">{{tarea.texto}}</span>

			</li>
		</ul>			
	

		<form ng-submit="agregarTarea()">
			<input type="texto" size="30" placeholder="Agrege aqui una nueva tarea" ng-model="textoNuevaTarea">
			<button class="btn btn-primary" type="submit">Agregar</button>
		</form>

	</div>


	
	<script src="js/ejemplos.js"></script>
	<script src="js/angular.min.js"></script>	
	<script src="js/jquery.js"></script>	
	<script src="js/bootstrap.js"></script>	
</body>
</html>
