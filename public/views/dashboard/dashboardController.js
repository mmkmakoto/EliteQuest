angular
.module('salasModule')
.controller('dashboardController', ['$scope','salas', function ($scope,salas)
{
	salas.all().then(function(data){
		//route retorna
		$scope.salas = data.data;
		console.log($scope.salas);
	});

	console.log(user_id);

}]).run([function()
{
	// Evento ao rodar o controller
	console.log("dashboardController iniciando! =D");
}])