var app = angular.module('app', ['ui.bootstrap','ngRoute','ngResource']);
 
/**
* configuración de nuestra aplicación
* @param $routeProvider
*/
app.config(['$routeProvider', function($routeProvider)
{
    $routeProvider.when("/home", {
        templateUrl: "templates/home.html",
        controller: "homeController"
    })
    .otherwise({ redirectTo : "/"});
}]);
 
 
 
/**
* @description Controlador home
* @param $scope
* @param $modal
*/
app.controller('homeController', ['$scope','$modal','$http', function($scope,$modal,$http)
{    
    $http.get('data.json').success(function (data) {
        //Convert data to array.
        //datos lo tenemos disponible en la vista gracias a $scope
        $scope.datos = data;
    });
    //datosResource lo tenemos disponible en la vista gracias a $scope
    //$scope.datosResource = dataResource.get();
    /**
    * abre la modal
    */

    $scope.openModal = function (size)
    {
        var modalInstance = $modal.open({
            templateUrl: 'myModal.html',
            controller: 'myModalController',
            size: size,
            resolve: {
                Items: function() //scope del modal
                {
                      return $scope.datos;
                }
            }
        });
        modalInstance.result.then(function (selectedItem) {
          $scope.selected = selectedItem;
        }, function () {
          $log.info('Modal dismissed at: ' + new Date());
        });
    }
    

}]);
 
/**
* @description Controlador para la modal
* @param $scope
* @param $modalInstance
* @param Items
*/
app.controller('myModalController', ['$scope','$modalInstance','Items', function($scope, $modalInstance,Items)
{
    $scope.items = Items;
 
    $scope.save = function (param)
    {
        console.log(param)
    };
 
    $scope.cancel = function ()
    {
        $modalInstance.dismiss('cancel');
    };
}]);
//de esta forma tan sencilla consumimos con $resource en AngularJS
app.factory("dataResource", function ($resource) {
    return $resource("data.json", //la url donde queremos consumir
        {}, //aquí podemos pasar variables que queramos pasar a la consulta
        //a la función get le decimos el método, y, si es un array lo que devuelve
        //ponemos isArray en true
        { get: { method: "GET", isArray: true }
    })
})