function validateAnswer(answer){
  var response = {};
  response["respondido"] = true;
  var certa = $question.respostas[answer.opcao];
  response.correto = $question.respostas[answer.opcao].correta === 1;

  $usedFichas.push($selectedFicha);
  var rodada = getRodadaAtual();
  if(response.correto){
    //$status.partida.player_1.jogador.posicao += answer.ficha;
    response.nova_posicao = rodada.posicao + Number(answer.ficha);

  }else {
    response.nova_posicao = 0;
  }
  var data = {
    ficha: Number(answer.ficha),
    resposta_id: certa.id,
    status: "ok",
    user_id: $user_id
  }

  if(response.id_pergunta === 0 && response.opcao === 0){
    data.status = "timeout";
  }
  console.log(data);
  answerQuestion(data, function(confirmation){
    if(confirmation){
      console.log("resposta enviada com sucesso...");
    }
  });
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

  var el = $("[player_id=" + $user_id + "]");
  var id = el.attr('id').split("_");
  id.shift();
  var all_id = id.join("_");
  if(!response.respondido){
    console.log("ALERT");
    $pergunta_errada.play();
    $("#answer_result").text("Não respondido :(");
    controlarTurno();
    $controleTurnoIntervalo = setInterval(function(){
      console.log("atualizando status da sala...");
      controlarTurno();
    }, 5000);
  }else if(response.correto){
    $pergunta_certa.play();
    var html = '<img class="center" src="./../../assets/resposta_certa.png"></img>';
    $("#answer_result").html(html);
      var data = {user_id: $user_id};
      requestGameStatus(data, function(new_status){
        console.log("andando...");
        //var rodada = new_status.rodadaAtual;
        var rodada = getRodadaAtual()
        rodada.posicao += response.ficha;

        if(response.ficha >= 2)
          $audio_walk.play();
        walk(rodada, true);
          $controleTurnoIntervalo = setInterval(function(){
            controlarTurno();
          }, 10000);
        $rodadas = null;
      });
    // requestStatus(function(status){
    //
    //   var rodada = status.rodadas[status.rodadas.length - 1];
    //   var stats = rodada.stats_jogadores.filter(function(stats){return stats.jogador_id === $user_id})[0];
    //   stats.posicao += response.ficha;
    //
    //   if(response.ficha > 2)
    //     $audio_walk.play();
    //   setInterval(walk(stats, true), 6000);
    //   $rodadas = null;
    // });

    $selectedFicha = null;
    //setInterval(function(){statusTurno();}, 5000);
  }else{
    $pergunta_errada.play();
    var html = '<img src="./../../assets/resposta_errada.png"></img>';
    $("#answer_result").html(html);
    controlarTurno();
    $controleTurnoIntervalo = setInterval(function(){
      console.log("atualizando status da sala...");
      controlarTurno();
    }, 5000);
  }
  $("#turno_timer").text("30");
  $("#questionArea").modal("hide");
  $("#resultadoAnswer").modal("show");
  $selectedFicha = null;
  $inicioRodada = true;
  for(i = 1; i <= 5; i++)
    disableFicha($("#ficha_" + i));
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
  console.log(answer);
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
    $question = getRodadaAtual().pergunta;
      showQuestion();

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
