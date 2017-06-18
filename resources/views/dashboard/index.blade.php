<!DOCTYPE html>
<html>

<head>

	<title>Elite Jogos</title>
	<meta charset="utf-8">


    <link rel="stylesheet" href='/bower_components/bootstrap/dist/css/bootstrap.min.css'>
    <script type="text/javascript" src='/bower_components/jquery/dist/jquery.js'></script>
    <script type="text/javascript" src='/bower_components/bootstrap/dist/js/bootstrap.js'></script>

    <link rel="stylesheet" type="text/css" href="./../../css/style.css">


    <script type="text/javascript" src="/views/salas/salas.js"></script>
		<script type="text/javascript" src="/views/salas/data/fetchData.js"></script>

		<script> var $user_id = {{ Auth::user()->id }};</script>

		<style media="screen">
		.table > tbody > tr > td, .table > tbody > tr > th {
			 vertical-align: middle;
		}
		</style>

</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 logo">
				<img src="./../../assets/Logo Quest.png">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="col-lg-4">
					<div>
						<span>
							<h4>Olá, {{ Auth::user()->name }}</h4>
						</span>
					</div>
					<!-- <div>
						<span>E-Mail: {{ Auth::user()->email }}</span>
					</div> -->
				</div>
				<div class="col-lg-6">

				</div>
				<div class="col-lg-2">
					<button style="width: 100px;" id="criar_sala" class="btn btn-sm btn-success">Criar sala</button>
			</div>
		</div>
		<hr/>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Salas
					</div>
					<div class="panel-body" style="height: 300px; overflow-y: scroll;">
						<table class="table table-hover">
						  <thead>
						    <tr>
						      <th class="col-md-4">Sala</th>
						      <th class="col-md-4">Jogadores</th>
						      <th class="col-md-4">-</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th class="center col-md-4" scope="row">1</th>
						      <td class="col-md-6">2/4</td>
									<td class="col-md-2">
										<button style="width: 100px;" idSala="1" class="btn btn-success btn_entrar_sala">Entrar</button>
									</td>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>

		</div>

	<div class="container">
		<div class="row footer">
			<div class="col-sm-3 empresa">ELITE JOGOS</div>
			<div class="col-sm-4 webmaster"><a href="/"><u>Webmaster</u></a></div>
			<div class="col-sm-5 webmaster">
				<form id="logout-form" action="{{ route('logout') }}" method="POST">
						{{ csrf_field() }}
						<button id="botao" class="btn btn-success" type="submit">Logout</button>
				</form>
			</div>
		</div>
	</div>

	<div class="modal fade" id="sala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">Nova Sala</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						Infos da sala
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" id="criar_sala" data-dismiss="modal">Criar</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="newSala" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">Nova Sala</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="form-group">
							<div class="col-lg-4">
								<label for="dificuldade">Dificuldade:</label>
							  <select class="form-control" id="dificuldade">
							    <option value="1">Fácil</option>
							    <option value="2">Médio</option>
							    <option value="3">Difícil</option>
							  </select>
							</div>
						  <div class="col-lg-4">
								<label for="numero_jogadores">Número de jogadores:</label>
							  <select class="form-control" id="numero_jogadores">
							    <option>1</option>
							    <option>2</option>
							    <option>3</option>
							    <option>4</option>
							  </select>
						  </div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" id="criar_sala" data-dismiss="modal">Criar</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>
