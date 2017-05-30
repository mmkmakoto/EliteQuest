function answer(answer){
  answer["ficha"] = $selectedFicha.valor;
  console.log(answer);

  var response = getResponseForRandomQuestion(answer);

  if(answer.id_pergunta === 0 && answer.opcao === 0)
  response["respondido"] = false;
  else
  response["respondido"] = true;


  answerResponse(response);
}

function answerResponse(response){
  if(!response.respondido){
    $("#answer_result").text("Não respondido :(");
  }else if(response.correto){
    $("#answer_result").text("Resposta correta - BIIIIIIIIIIRL");
    $jogador.posicao = response.nova_posicao;
    walk("player_1", response.nova_posicao, true);
    $selectedFicha = null;
    statusTurno();
  }else{
    $("#answer_result").text("Resposta errada - Que pena....");
  }
  $("#turno_timer").text("0");
  $("#questionArea").modal("hide");
  $("#resultadoAnswer").modal("show");

}

function getQuestion(configuration, callback){

  requestQuestion(function(question){
    //Temporario:
    var key = question.length;
    if(key > 1)
    key = Math.floor(((Math.random() * key)));

    //Temporario
    if(key === 0)
    key ++;

    $question = question[key - 1];
    callback($question);
  });
}

function selectAnswer(notAnswered){
  clearInterval(intervalo);

  if(notAnswered){
    var answer = {
      "id_pergunta": 0,
      "opcao": 0
    }
  }else{
    var answerValue = $("input[name='answer']:checked").val();
    var answer = {
      "id_pergunta": $question.id,
      "opcao": Number(answerValue)
    }
  }
  this.answer(answer);
  $question = null;
}

function showQuestion(){
  console.log($question);
  $("#enunciado").text($question.titulo);
  $("#choice_a").text($question.opcao_1);
  $("#choice_b").text($question.opcao_2);
  $("#choice_c").text($question.opcao_3);
  $("#choice_d").text($question.opcao_4);
}

function checkQuestion(){
  console.log("Checking question...");
  $selectedFicha.disponivel = false;
  $fichas[String($selectedFicha.valor)] = $selectedFicha;
  if(($jogador.seu_turno) && ($question === null)){

    var configuration = {
      "tema": 123
    };

    getQuestion(configuration, function(question){
      $question = question;
      showQuestion();
    });
  }
}

$(document).ready(function(){

  requestQuestion();

  $("#desistir").on("click", function(){
    selectAnswer(true);
  });

  $("#answer").on("click", function(){
    selectAnswer();
    $("#questionArea").modal("hide");
  });
});
