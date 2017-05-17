angular
.module('modelAccessModule')
.controller('exemploAngularController', ['$scope','modelAccess', function ($scope,modelAccess)
{
	//tudo isso executa quando o controller inicia

	$scope.testes = [
		{
			texto:'olá, estamos testando o angular',
			class:'panel panel-default',
		},
		{
			texto:'com ng-repeat! also...',
			class:'panel panel-primary',
		},
		{
			texto:'Lorem ipsum dolor sit amet',
			class:'panel panel-success',
		},
		{
			texto:'consectetur adipiscing elit',
			class:'panel panel-info',
		},
	];

	$scope.testeInputs = {
		input1:{
			placeholder : "lorem ipsum n'shit ",
			label : "primeiro input",
			value : 'lorem ipsum',
		},
		input2:{
			placeholder : "dolor sit amet n'shit ",
			label : "segundo input",
			value : 'dolor sit amet',
		}
	};

	$scope.retornos = {
		categorias:{
			model:'Categorias',
			rota:'http://quest.dev/api/categorias/all',
			itens:null,
		},
		questoes:{
			model:'Questoes',
			rota:'http://quest.dev/api/questoes/all',
			itens:null,
		},
	}

	modelAccess.categorias().then(function(data){
		//route retorna
		$scope.retornos.categorias.itens = data.data;
	});

	modelAccess.questoes().then(function(data){
		//route retorna
		$scope.retornos.questoes.itens = data.data;
	});


	console.log('--- $scope.testes ---');
	console.log($scope.testes);

}]).run([function()
{
	// Evento ao rodar o controller
	console.log("exemploAngularController iniciando! =D");
}])
