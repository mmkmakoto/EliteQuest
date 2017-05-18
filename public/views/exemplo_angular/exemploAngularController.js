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
			itens:[],
		},
		questoes:{
			model:'Questoes',
			rota:'http://quest.dev/api/questoes/all',
			itens:[],
		},
	}




	$scope.forms = {
		categoria:{
			titulo:null,
			descricao:null,
		},
		questao:{
			categoria_id:null,
			titulo:null,
			opcao_2:null,
			opcao_3:null,
			opcao_4:null,
			status:null,
		},
	}
	$scope.formStatus = {
		categoria:{
			class:null,
			message:null,
			dismissed:true,
		},
		questao:{
			class:null,
			message:null,
			dismissed:true,
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

	$scope.enviarCategoria = function(categoria){
		modelAccess.enviarCategoria(categoria).then(function(data){
			//route retorna
			if(angular.equals(data.data,{})){
				//msg de erro
				$scope.formStatus.categoria.class = "alert-danger";
				$scope.formStatus.categoria.message = 'erro de cadastro';
				$scope.formStatus.categoria.dismissed = false;
			}
			else{
				$scope.retornos.categorias.itens.push(data.data);

				//Limpar form
				categoria.titulo = null;
				categoria.descricao = null;

				//msg de sucesso
				$scope.formStatus.categoria.class = "alert-success";
				$scope.formStatus.categoria.message = 'cadastro bem sucedido';
				$scope.formStatus.categoria.dismissed = false;
			}
		});
	}

	$scope.enviarQuestao = function(questao){
		modelAccess.enviarQuestao(questao).then(function(data){
			//route retorna
			if(angular.equals(data.data,{})){
				//msg de erro
				$scope.formStatus.questao.class = "alert-danger";
				$scope.formStatus.questao.message = 'erro de cadastro';
				$scope.formStatus.questao.dismissed = false;
			}
			else{
				$scope.retornos.questoes.itens.push(data.data);

				//Limpar form
				questao.categoria_id = null;
				questao.titulo = null;
				questao.opcao_2 = null;
				questao.opcao_3 = null;
				questao.opcao_4 = null;
				questao.status = null;

				//msg de sucesso
				$scope.formStatus.questao.class = "alert-success";
				$scope.formStatus.questao.message = 'cadastro bem sucedido';
				$scope.formStatus.questao.dismissed = false;
			}
		});
	}

	console.log('--- $scope.testes ---');
	console.log($scope.testes);

}]).run([function()
{
	// Evento ao rodar o controller
	console.log("exemploAngularController iniciando! =D");
}])
