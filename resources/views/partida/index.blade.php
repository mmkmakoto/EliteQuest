<!DOCTYPE html>
<html>

<head>

	<title>Elite Jogos</title>
	<meta charset="utf-8">
	<script> var $user_id = {{ Auth::user()->id }};</script>

	<style>

	canvas {
  border: 2px solid rgb(151, 149, 149);
	}

	.rotated-left {
  transform: rotate(-25deg);
  -ms-transform: rotate(-25deg); /* IE 9 */
  -moz-transform: rotate(-25deg); /* Firefox */
  -webkit-transform: rotate(-25deg); /* Safari and Chrome */
  -o-transform: rotate(-25deg); /* Opera */
	}

	.rotated-right {
  transform: rotate(25deg);
  -ms-transform: rotate(25deg); /* IE 9 */
  -moz-transform: rotate(25deg); /* Firefox */
  -webkit-transform: rotate(25deg); /* Safari and Chrome */
  -o-transform: rotate(25deg); /* Opera */
	}

	#token_player_1{
		left: 130px;
		top: 30px;
	}

	#token_player_2{
		left: 170px;
		top: 40px;
	}

	#token_player_3{
		left: 135px;
		top: 70px;
	}

	#token_player_4{
		left: 170px;
		top: 85px;
	}

	.position{
		font-size: 12px;
	}

	.token-min{
		height: 40px;
		width: 30px;
		position: absolute;
	}

	.token{
		height: 50px;
		width: 40px;
		position: absolute;
	}

	#token_player_id_1{
		height: 50px;
		width: 40px;
	}

	#token_player_id_3{
		height: 50px;
		width: 40px;
	}

	#token_player_id_4{
		height: 40px;
		width: 45px;
	}

	#token_player_4{
		height: 45px;
		width: 50px;
	}

	 #token_player_id_2{
		 height: 50px;
		 width: 40px;
	 }

	#token_player_2{
		height: 50px;
		width: 40px;
	}

	</style>

	<!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

    <link rel="stylesheet" type="text/css" href="./../../css/style.css">

    <link rel="stylesheet" href='/bower_components/bootstrap/dist/css/bootstrap.min.css'>
    <script type="text/javascript" src='/bower_components/jquery/dist/jquery.js'></script>
    <script type="text/javascript" src='/bower_components/bootstrap/dist/js/bootstrap.js'></script>

    <script type="text/javascript" src="/views/partida/data/fetchData.js"></script>
    <script type="text/javascript" src="/views/partida/parameters.js"></script>
    <script type="text/javascript" src="/views/partida/data/questions.js"></script>
    <script type="text/javascript" src="/views/partida/question.js"></script>
    <script type="text/javascript" src="/views/partida/turno.js"></script>
    <script type="text/javascript" src="/views/partida/fichas.js"></script>
    <script type="text/javascript" src="/views/partida/movimento.js"></script>
		  <script type="text/javascript" src="/views/partida/snake.js"></script>

</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 players">
        <div class="col-lg-3" id="area_player_1">
					<div class="col-lg-1">
						<img src="./../../assets/victor.png" id="token_player_id_1" class="token-min"/>
					</div>
					<div class="col-lg-11">
          	<span class="nome_player" id="name_player_1">-</span><br/><span class="position">Posição: <span class="position" id="pos_player_1">0</span></span>
					</div>
        </div>
        <div class="col-lg-3" id="area_player_2">
					<div class="col-lg-1">
						<img src="./../../assets/daniel.png" id="token_player_id_2" class="token-min"/>
					</div>
					<div class="col-lg-11">
          	<span class="nome_player" id="name_player_2">-</span><br/><span class="position">Posição: <span class="position" id="pos_player_2">0</span></span>
					</div>
        </div>
        <div class="col-lg-3" id="area_player_3">
					<div class="col-lg-1">
						<img src="./../../assets/guilherme.png" id="token_player_id_3" class="token-min"/>
					</div>
					<div class="col-lg-11">
	          <span class="nome_player" id="name_player_3">-</span><br/><span class="position">Posição: <span class="position" id="pos_player_3">0</span></span>
					</div>
        </div>
        <div class="col-lg-3" id="area_player_4">
					<div class="col-lg-1">
						<img src="./../../assets/ives.png" id="token_player_id_4" class="token-min"/>
					</div>
					<div class="col-lg-11">
          	<span class="nome_player" id="name_player_4">-</span><br/><span class="position">Posição: <span class="position" id="pos_player_4">0</span></span>
					</div>
        </div>
			</div>
			<div class="col-sm-1 pokerChips">
				<!-- <img src="./../../assets/poker 1.png" name="1" value="1"> -->

        <input type="image" class="ficha" disabled="true" id="ficha_1" ficha="1" src="./../../assets/darken_ficha_1.png"/>
				<input type="image" class="ficha" disabled="true" id="ficha_2" ficha="2"  src="./../../assets/darken_ficha_2.png"/>
        <input type="image" class="ficha" disabled="true" id="ficha_3" ficha="3" src="./../../assets/darken_ficha_3.png"/>
				<input type="image" class="ficha" disabled="true" id="ficha_4" ficha="4"  src="./../../assets/darken_ficha_4.png"/>
				<input type="image" class="ficha" disabled="true" id="ficha_5" ficha="5"  src="./../../assets/darken_ficha_5.png"/>
				<br/>
				<div class="row">
					<div class="col-sm-2">
						<button class="btn btn-default" id="snake_show" style="width: 70px;">Jogo</button>
					</div>
				</div>
			</div>
			<div class="col-sm-offset-1 col-sm-10 board">
				<img src="./../../assets/victor.png" id="token_player_1" class="token"/>
				<img src="./../../assets/daniel.png" id="token_player_2" class="token"/>
				<img src="./../../assets/guilherme.png" id="token_player_3" class="token"/>
				<img src="./../../assets/ives.png" id="token_player_4" class="token"/>
				<img src="./../../assets/tabuleiro2.png" name="board">
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row footer">
			<div class="col-sm-6 empresa"><img src="./../../assets/Logo Quest.png"></div>
			<div class="col-sm-offset-3 col-sm-3">
				<button class="btn btn-default btn-danger">Desistir do jogo</button>
			</div>
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<div class="modal fade" id="modalFinish" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title">Resultado</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h3><span id="finishMessage">-</span></h3>
						<h4>Você será redirecionado em: <span id="redirectMessage">5</span></h4>
					</div>
					<div class="modal-footer">
						<button id="forceRedirect" type="button" class="btn btn-secondary" data-dismiss="modal">Voltar a Home</button>
					</div>
				</div>
			</div>
		</div>

      <div class="modal fade" id="resultadoAnswer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">Resultado</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h3><span id="answer_result">-</span></h3>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="fichaConfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">Confirme a sua ficha</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Deseja utilizar essa ficha para jogar?
            </div>
            <div class="modal-footer">
              <button type="button" id="cancelFichaSelection" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" id="confirmFichaSelection" class="btn btn-primary">Confirmar</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="questionArea" tabindex="-1" role="dialog" aria-labelledby="Question" data-keyboard="false" data-backdrop="static" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title col-lg-12">Pergunta</h3>
              <div class=col-lg-12>
                Tempo para finalizar a rodada: <span id="turno_timer">30</span>
              </div>
            </div>
            <div class="modal-body">
              <div class="col-lg-12" id="question">
                <div id="enunciadoArea">
                  <h4>Enunciado:</h4><h3><span id="enunciado"></span></h3>
                </div>
              </div>
              <div class="col-lg-12">
                <div id="answerAArea">
                  <input type="radio" name="answer" id="answer_a" value="0" checked/>
                  (A) <span id="choice_0"></span>
                </div>
                <div id="answerBArea">
                  <input type="radio" name="answer" id="answer_b" value="1" checked/>
                  (B) <span id="choice_1"></span>
                </div>
                <div id="answerCArea">
                  <input type="radio" name="answer" id="answer_c" value="2" checked/>
                  (C) <span id="choice_2"></span>
                </div>
                <div id="answerDArea">
                  <input type="radio" name="answer" id="answer_d" value="3" checked/>
                  (D) <span id="choice_3"></span>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" id="desistir" class="btn btn-secondary" data-dismiss="modal">Desistir</button>
              <button type="button" id="answer" class="btn btn-primary">Responder</button>
            </div>
          </div>
        </div>
			</div>
		</div>

		<div class="modal fade" id="waitGameArea" tabindex="-1" role="dialog" aria-labelledby="WaitGame" data-keyboard="false" data-backdrop="static" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						Não é a sua vez RAPA! Joga um joguinho aí enquanto isso...
					</div>
					<div class="modal-body">
						<canvas id="stage" height="400" width="520"></canvas>
					</div>
					<div class="modal-footer">
						<button type="button" id="snake_no_more" class="btn btn-danger" data-dismiss="modal">Não mostrar mais</button>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>
