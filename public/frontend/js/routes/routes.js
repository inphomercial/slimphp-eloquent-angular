TestApp.config(['$routeProvider', function($routeProvider)
{
	$routeProvider
	      .when('/', {
	          templateUrl: 'frontend/partials/main.html'
		})
	      .when('/users', {
		  templateUrl: 'frontend/partials/users.html'
		})
	     .otherwise({
	          templateUrl: 'frontend/partials/main.html'
	     });
}]);
