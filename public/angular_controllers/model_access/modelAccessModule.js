angular
.module('modelAccessModule',[])
.config(function ()
{
	// Configs aqui
})
.run([function()
{
	// Evento ao rodar o modulo
	console.log("modelAccessModule running!");
}])
.service('Processamentos', ['$http', function ($http)
{
	// Servicos

	return ({
		all : function(){
			return $http.get('/admin/api/processamentos');
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