<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
    <link rel="stylesheet" href='/bower_components/bootstrap/dist/css/bootstrap.min.css'>
    <script type="text/javascript" src='/bower_components/jquery/dist/jquery.js'></script>
    <script type="text/javascript" src='/bower_components/bootstrap/dist/js/bootstrap.js'></script>

    <script type="text/javascript" src="/views/partida/data/questions.js"></script>
    <script type="text/javascript" src="/views/partida/question.js"></script>
    <script type="text/javascript" src="/views/partida/turno.js"></script>
    <script type="text/javascript" src="/views/partida/fichas.js"></script>
    <script type="text/javascript" src="/views/partida/movimento.js"></script>

  </head>
  <body>
  <span id="turno">-</span>
  <div id="questionArea">
  <br>
  <div class="col-lg-12" id="enunciadoArea">
    <span id="enunciado"></span>
  </div>
<div class="col-lg-12" id="answerAArea">
  <input type="radio" name="answer" id="answer_a" value="1" checked/>
  <span id="choice_a"></span>
</div>
<div class="col-lg-12" id="answerBArea">
  <input type="radio" name="answer" id="answer_b" value="2" checked/>
  <span id="choice_b"></span>
</div>
<div class="col-lg-12" id="answerCArea">
  <input type="radio" name="answer" id="answer_c" value="3" checked/>
  <span id="choice_c"></span>
</div>
<div class="col-lg-12" id="answerDArea">
  <input type="radio" name="answer" id="answer_d" value="4" checked/>
  <span id="choice_d"></span>
</div>
<br/>
  <button type="button" id="answer" class="btn">Basic</button>
  <br/>
  <span id="answer_result">-</span>
  <div class=col-lg-12>
    <span id="posicao">0</span>
  </div>
  <div class=col-lg-12>
    <span id="turno_timer">0</span>
  </div>
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
  </body>
</html>
