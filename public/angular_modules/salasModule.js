angular
.module('salasModule',[])
.config(function ($interpolateProvider)
{
  // Configs aqui
  // Mudando o simbolo para acessar as infos do angular, pois o padrao conflita com o blade {{}}
  $interpolateProvider.startSymbol('---');
  $interpolateProvider.endSymbol('---');
})
.run([function()
{
	// Evento ao rodar o modulo
	console.log("salasModule iniciando! =D");
}])
.service('salas', ['$http', function ($http)
{
	// Servicos

	return ({
		//ROTAS FUNCIONAIS
		all : function(){
			return $http.get('api/salas/all');
		},
	});
}]);