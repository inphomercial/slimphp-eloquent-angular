
TestApp.controller('TestController', function ($scope, $http) {

	$scope.users = [],

      	$http.get('api/index.php/users').success(function(data) {
		$scope.users = data;
	});
});
