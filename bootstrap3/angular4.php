
<html>
<head>
  <title>Fabricas como Servicios</title>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.7/angular.min.js"></script>
  <script src="js/fabrica.js"></script>
</head>
<body ng-app="miAp">
<div class="container">
  <h1>Compartir Metodos entre controladores utilizando Fabricas</h1>
  <hr>
  <span class="lead text-info">Controlador Uno</span>
  <div ng-controller="ControladorUno">
    <input type="text" size="50" ng-model="nuevoMensaje">
    <button class="btn btn-success" ng-click="nuevo()">Guardar</button>
    <h3 class="text-info">{{dato.mensaje}}</h3>
  </div>

  <hr>

  <span class="lead text-warning">Controlador Dos</span>
  <div ng-controller="ControladorDos">
    <input type="text" size="50" ng-model="nuevoMensaje">
    <button class="btn btn-success" ng-click="nuevo()">Guardar</button>
    <h3 class="text-warning ">{{dato.mensaje}}</h3>
  </div>

  <hr>
  <div ng-controller="ControladorTres">
    <button class="btn btn-primary" ng-click="resetear()">Mensaje Inicial</button>
  </div>
</div>
</div>
<hr>
<div>
	  <a class="btn btn-lg btn-warning" href="https://www.youtube.com/watch?v=VWAuSU3WPTQ" target="_blank">
	    ir al Video-Tutorial
    </a>
	</div>
</body>
</html>