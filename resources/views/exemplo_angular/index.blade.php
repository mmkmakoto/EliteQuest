@extends('partials.base')

@section('title')
    Exemplo Angular
@endsection

@section('body')

<!-- tudo dentro do elemento com a tag ng-app tem acesso ao modulo indicado (modelAccessModule no caso) -->
<div class="container" ng-app='modelAccessModule'>

    <h1>Exemplo Angular</h1>

	<!-- tudo dentro do elemento com a tag ng-controller tem acesso ao controller indicado (exemploAngularController no caso) -->    
    <div class="row" ng-controller='exemploAngularController'>

    	<div class="col-md-6">

    		<h3>Exemplos Gerais</h3>

			<!-- a tag ng-repeat itera o conteudo de $scope.testes repetindo o elemento e seu conteudo a cada iteração -->
			<div ng-repeat="teste in testes">

			<!-- acessando o item da iteração dentro da tag -->
				<div ng-class="teste.class" class="panel panel-default">
				
					<div class="panel-heading">
						<h3 class="panel-title">Este painel está sendo repetido para cada elemento em $scope.testes</h3>
					</div>
				
					<div class="panel-body">
						<!-- acessando o item da iteração fora de qualquer tag -->
						<span> ---teste.texto--- </span>
					</div>
				
				</div>
			
			</div>

			<!-- incluindo elementos de outro arquivo -->
			<div ng-include="'views/exemplo_angular/partials/table.html'">
			</div>

			<!-- iterando testeInputs como item, toda alteracao em item, sera feita no elemnto correspondente de testeInputs -->
			<div ng-repeat="item in testeInputs" ng-include="'views/partials/inputText.html'">	
			</div>

			
			<span>(denovo)</span>
			<!-- iniciando item como input1 de testeInputs, toda alteracao em item, sera feita em input1 (logo em testeInputs) -->
			<div ng-init="item = testeInputs.input1" ng-include="'views/partials/inputText.html'">	
			</div>

		</div>

	</div>

</div>

@endsection

@section('js')
	<script src='/angular_modules/modelAccessModule.js'></script>
	<script src='/views/exemplo_angular/exemploAngularController.js'></script>
@endsection
