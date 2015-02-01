var app = angular.module("app", []);
 
app.controller("myController", function($scope){
    $scope.users = [
        {
            nombre : "israel parra"
        },
        {
            nombre : "juan lópez"
        },
        {
            nombre : "pepe pérez"
        }
    ]
})
//filtro para poner la primera letra en mayúscula
app.filter("capitalize", function(){
    return function(sadsa) {
        if(sadsa != null){
            return sadsa.substring(0,1).toUpperCase()+sadsa.substring(1);
        }
    }
})
 
//filtro para poner todo el sadsao en mayúsculas
app.filter("toUpper", function(){
    return function(sadsa){
        if(sadsa != null){
            return sadsa.toUpperCase();
        }
    }
})
 
//filtro para poner puntos suspensivos a partir de x carácteres
app.filter("maxLength", function(){
    return function(sadsa,max){
        if(sadsa != null){
            if(sadsa.length > max){
                return sadsa.substring(0,max) + "...";
            }
        }
    }
})