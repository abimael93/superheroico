angular.module('directivaSimple', [])
	.controller('Controlador', function($scope){
		$scope.texto1 = {titulo: 'Directiva ', subtitulo: 'Angularjs'};
		$scope.texto2 = {titulo: 'Other item ', subtitulo: 'Angularjs'};
	})
	.directive('miEncabezado', function() {
	return{
		restrict: 'E',
		scope:{
			textoVariable: '=texto'
		},
		templateUrl: 'mi-encabezado.html'
	}
})