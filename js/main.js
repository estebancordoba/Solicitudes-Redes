// Creación del módulo
var angularRoutingApp = angular.module('angularRoutingApp', ['ngRoute']);

// Configuración de las rutas
angularRoutingApp.config(function($routeProvider) {

	$routeProvider		
		.when('/puntoRed', {
			templateUrl : '../pages/puntoRed.html',
			controller 	: 'puntController'
		})
		.when('/permisos', {
			templateUrl : '../pages/permisos.html',
			controller 	: 'permController'
		})
        .when('/registro', {
			templateUrl : '../pages/registro.html',
			controller 	: 'regController'
		})
        .when('/videoConf', {
			templateUrl : '../pages/videoConf.html',
			controller 	: 'vidController'
		})
		.otherwise({
			redirectTo: '/'
		});
});

angularRoutingApp.controller('mainController', function($scope) {
	$scope.message = 'Hola, Mundo!';
});

angularRoutingApp.controller('regController', function($scope) {
	$(document).ready(function(){
                $(".button-collapse").sideNav();    
                $('select').material_select();
                $('.datepicker').pickadate({
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 15, // Creates a dropdown of 15 years to control year
                    format: 'yyyy-mm-dd' 
                  });
                $('textarea#observ').characterCounter();                

            })
});

angularRoutingApp.controller('permController', function($scope) {
	$(document).ready(function(){
                $(".button-collapse").sideNav();    
                $('select').material_select();
                $('.datepicker').pickadate({
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 15, // Creates a dropdown of 15 years to control year
                    format: 'yyyy-mm-dd' 
                  });
                $('textarea#observ').characterCounter();                
                $('textarea#justifi').characterCounter();                
            })
});

angularRoutingApp.controller('puntController', function($scope) {
	$(document).ready(function(){
                $(".button-collapse").sideNav();    
                $('select').material_select();
                $('.datepicker').pickadate({
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 15, // Creates a dropdown of 15 years to control year
                    format: 'yyyy-mm-dd' 
                  });
                $('textarea#observ').characterCounter();                
            })
});

angularRoutingApp.controller('vidController', function($scope) {
	$(document).ready(function(){
                $(".button-collapse").sideNav();    
                $('select').material_select();
                $('.datepicker').pickadate({
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 15, // Creates a dropdown of 15 years to control year
                    format: 'yyyy-mm-dd' 
                  });
               $('#time').bootstrapMaterialDatePicker({ date: false });
                $('textarea#observ').characterCounter();    
            })
});