<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Plantilla</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/mis-estilos.css">
	<link rel="stylesheet" href="css/ejemplos.css">
	
</head>
<body ng-app>

	<div  class="container" ng-controller="ControladorFiltros">
    <h1>Filtros Nativos de AngularJS</h1>
    
    <div class="panel panel-primary">
      <div class="panel-heading">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
          <input type="text" class="form-control" placeholder="Buscare Empleado" ng-model="buscar">
        </div>
      </div>
      <div class="panel-body">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>
              Nombre/s
             <span class="glyphicon glyphicon-chevron-up" style="cursor: pointer" ng-click="ordenarPor('nombre')"></span>
              <span class="glyphicon glyphicon-chevron-down" style="cursor: pointer" ng-click="ordenarPor('-nombre')"></span>
            </th>            
            <th>Apellido Paterno
            	<span class="glyphicon glyphicon-chevron-up" style="cursor: pointer" ng-click="ordenarPor('paterno')"></span>
				<span class="glyphicon glyphicon-chevron-down" style="cursor: pointer" ng-click="ordenarPor('-paterno')"></span>
            </th>
            <th>Apellido Materno</th>
            <th>Primer dia de trabajo</th>
            <th>Telefono</th>
            <th>Salario</th>
            <th>Bono</th>
          </tr>
          </thead>
          <tbody>
          <tr ng-repeat="empleado in empleados | orderBy:ordenSeleccionado | filter:buscar">
            <td>{{empleado.nombre}}</td>
            <td>{{empleado.paterno | uppercase}}</td>
            <td>{{empleado.materno | lowercase}}</td>
            <td>{{empleado.primerDia | date:'fullDate'}} a las {{empleado.primerDia | date:'h:mma'}}</td>
            <td>{{empleado.telefono}}</td>
            <td>{{empleado.salario | currency}}</td>
            <td>% {{empleado.bono | number:2}}</td>
          </tr>
          </tbody>

        </table>
          
      </div>
    </div>
  </div>
	

	<script src="js/angular-locale_es-es.js"></script>
	<script src="js/ejemplos.js"></script>
	<script src="js/angular.min.js"></script>	
	<script src="js/jquery.js"></script>	
	<script src="js/bootstrap.js"></script>	
</body>
</html>