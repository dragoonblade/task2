var app angular.module('APP',['ngRoute']);

app.config(function($routeProvider, $locationProvider) {
	$routeProvider
		.when('/',{
			templateUrl: 'templates/login.html'
		//	controller: 'LoginController'
		}).when('/dash', {
		//	templateUrl: 'templates/dash.html',
		//	controller: 'DashController'
		});
});

