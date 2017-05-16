angular
.module('modelAccessModule')
.controller('modelAccessController', ['$scope', function ($scope)
{
	$scope.testes = [
		'oi',
		'estamos',
		'testando',
		'o angular',
		'com',
		'ng-repeat!'
	];

	console.log($scope.testes);
}]);
