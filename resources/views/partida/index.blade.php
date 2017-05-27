<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Test</title>
  <link rel="stylesheet" href='/bower_components/bootstrap/dist/css/bootstrap.min.css'>
  <script type="text/javascript" src='/bower_components/jquery/dist/jquery.js'></script>
  <script type="text/javascript" src='/bower_components/bootstrap/dist/js/bootstrap.js'></script>

  <script type="text/javascript" src="/views/partida/parameters.js"></script>
  <script type="text/javascript" src="/views/partida/data/questions.js"></script>
  <script type="text/javascript" src="/views/partida/question.js"></script>
  <script type="text/javascript" src="/views/partida/turno.js"></script>
  <script type="text/javascript" src="/views/partida/fichas.js"></script>
  <script type="text/javascript" src="/views/partida/movimento.js"></script>

</head>
<body>
  <div class="container">
    <div class="col-lg-12 players">
      <div class="col-lg-3">
        <span class="nome_player" id="name_player_1">Jogador 1</span> - Posição: <span id="pos_player_1">0</span>
      </div>
      <div class="col-lg-3">
        <span class="nome_player" id="name_player_2">Jogador 2</span> - Posição: <span id="pos_player_2">0</span>
      </div>
      <div class="col-lg-3">
        <span class="nome_player" id="name_player_3">Jogador 3</span> - Posição: <span id="pos_player_3">0</span>
      </div>
      <div class="col-lg-3">
        <span class="nome_player" id="name_player_4">Jogador 4</span> - Posição: <span id="pos_player_4">0</span>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="col-lg-12" id="fichasArea">
        <div class="col-lg-12">
          <button type="button" id="ficha_1" ficha="1" class="btn ficha">Ficha 1</button>
        </div>
        <div class="col-lg-12">
          <button type="button" id="ficha_2" ficha="2" class="btn ficha">Ficha 2</button>
        </div>
        <div class="col-lg-12">
          <button type="button" id="ficha_3" ficha="3" class="btn ficha">Ficha 3</button>
        </div>
        <div class="col-lg-12">
          <button type="button" id="ficha_4" ficha="4" class="btn ficha">Ficha 4</button>
        </div>
        <div class="col-lg-12" >
          <button type="button" id="ficha_5" ficha="5" class="btn ficha">Ficha 5</button>
        </div>
        <div class="col-lg-12" >
          <button type="button" id="ficha_6" ficha="6" class="btn ficha">Ficha 6</button>
        </div>
      </div>
      <button type="button" id="get_question" class="btn hidden">Responser pergunta</button>
    </div>
    <br>
  </div>

  <!-- Modal -->
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

  <!-- Modal -->
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

  <!-- Modal -->
  <div class="modal fade" id="questionArea" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title col-lg-12">Pergunta</h3>
          <div class=col-lg-12>
            Tempo para finalizar a rodada: <span id="turno_timer">0</span>
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
              <input type="radio" name="answer" id="answer_a" value="1" checked/>
              (A) <span id="choice_a"></span>
            </div>
            <div id="answerBArea">
              <input type="radio" name="answer" id="answer_b" value="2" checked/>
              (B) <span id="choice_b"></span>
            </div>
            <div id="answerCArea">
              <input type="radio" name="answer" id="answer_c" value="3" checked/>
              (C) <span id="choice_c"></span>
            </div>
            <div id="answerDArea">
              <input type="radio" name="answer" id="answer_d" value="4" checked/>
              (D) <span id="choice_d"></span>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" id="desistir" class="btn btn-secondary" data-dismiss="modal">Desistir</button>
          <button type="button" id="answer" class="btn btn-primary">Responder</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
