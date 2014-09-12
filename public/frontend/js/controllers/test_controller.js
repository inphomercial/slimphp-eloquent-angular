
TestApp.controller('TestController', function ($scope, $http) {

	$scope.users = [],

      	$http.get('/api/users').success(function(data) {
		$scope.users = data;
	});
});
