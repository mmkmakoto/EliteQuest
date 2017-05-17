angular
.module('modelAccessModule',[])
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
	console.log("modelAccessModule iniciando! =D");
}])
.service('modelAccess', ['$http', function ($http)
{
	// Servicos

	return ({
		//ROTAS FUNCIONAIS
		categorias : function(){
			return $http.get('api/categorias/all');
		},
		questoes : function(){
			return $http.get('api/questoes/all');
		},

		//EXEMPLOS, N USAR
		all : function(model){
			return $http.get('api/model_access/' + model);
		},
		modelosDoCliente: function(){
			return $http.get('/admin/api/modelos/modelosDoCliente');
		},
		deletar : function($processamento){
			return $http.delete('/admin/api/processamentos/deletar/' + $processamento.id);
		},
		regerar : function($processamento){
			return $http.get('/admin/api/processamentos/regerar/' + $processamento.id);
		},
		getProcessamentoLog : function(processamento){
			return $http.get('/proc/' + processamento,{
				ignoreLoadingBar: true
			});
		}
	});
}]);