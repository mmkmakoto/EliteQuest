function validateAnswer(answer){
  var response = {};
  response["respondido"] = true;
  response.correto = $question.respostas[answer.opcao].correta === 1;

  $usedFichas.push($selectedFicha);
  var meu_status = getRodadaAtual().stats_jogadores.filter(function(s){return s.jogador_id === $eu.id})[0];
  if(response.correto){
    //$status.partida.player_1.jogador.posicao += answer.ficha;
    response.nova_posicao = meu_status.posicao + Number(answer.ficha);

  }else {
    response.nova_posicao = 0;
  }

  //resetzFichas();
  return response;

}

function answer(answer){
  answer["ficha"] = $selectedFicha;


  var response = validateAnswer(answer);

  if(answer.id_pergunta === 0 && answer.opcao === 0)
  response["respondido"] = false;
  else
  response["respondido"] = true;

  response.ficha = Number(answer.ficha);

  answerResponse(response);
}

function answerResponse(response){
  var el = $("[player_id=" + $eu.id + "]");
  var id = el.attr('id').split("_");
  id.shift();
  var all_id = id.join("_");
  if(!response.respondido){
    $audio_ta_de_sacanagem.play();
    $("#answer_result").text("Não respondido :(");
  }else if(response.correto){
    $pergunta_certa.play();
    $("#answer_result").text("Resposta correta - BIIIIIIIIIIRL");
    requestStatus(function(status){
      var rodada = status.rodadas[status.rodadas.length - 1];
      var stats = rodada.stats_jogadores.filter(function(stats){return stats.jogador_id === $eu.id})[0];
      stats.posicao += response.ficha;

      if(response.ficha > 2)
        $audio_walk.play();
      setInterval(walk(stats, true), 6000);
      $rodadas = null;
    });

    $selectedFicha = null;
    //setInterval(function(){statusTurno();}, 5000);
  }else{
    $pergunta_errada.play();
    $("#answer_result").text("Resposta errada - Que pena....");
  }
  $("#turno_timer").text("30");
  $("#questionArea").modal("hide");
  $("#resultadoAnswer").modal("show");
  $selectedFicha = null;

}

function getQuestion(callback){
  requestQuestion(function(question){
    //Temporario:
    // var key = question.length;
    // if(key > 1)
    // key = Math.floor(((Math.random() * key)));
    //
    // //Temporario
    // if(key === 0)
    // key ++;F

    $question = question;
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
  $load_pergunta.play();
  $("#enunciado").text($question.pergunta);
  for(index_resp in $question.respostas){
    var opcao = $question.respostas[index_resp];
    $("#choice_" + index_resp).text(opcao.resposta);
  }

  $("#questionArea").modal("show");
}

function checkQuestion(){
  console.log("Checking question...");
  if($question === null){
    getQuestion(function(question){
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
