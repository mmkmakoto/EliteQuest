var intervalo = null;
var $question = null;
var $jogadores = null;
var $temas = null;
var $eu = null;
var $rodadas = null;
var $atualizarTurno = true;
var $categorias = null;
var $snake_never = false;
var $firstLoad = true;
var $inicioRodada = true;
var $controleTurnoIntervalo;
var $rodadaTimer = 90;
var $turnoCounter = $rodadaTimer;
var $intervalTurnoCounter = null;
////////////////////////////////////////

function getRodadaAtual(){
  return $status.rodadaAtual; //$rodadas[$rodadas.length - 1];
}

function setGeneral(){
  var rodada_atual  = this.getRodadaAtual();
  // $eu = $jogadores.filter(function(j){return j.id === $user_id})[0];
  // //$eu = $jogadores.filter(function(j){return j.id === 3})[0];
  for(index_tema in $temas){
    var tema = $temas[index_tema];
    var elementId = "#tema" + (Number(index_tema) + 1);
    $(elementId).text(tema.nome);
  }


  for(index_jogador in $jogadores){
    var jogador = $jogadores[index_jogador];
    var elementId = "#name_player_" + (Number(index_jogador) + 1);
    var tokenId = "#token_player_" + (Number(index_jogador) + 1);
    $(tokenId).show();
    $(elementId).text(jogador.user.name);
    $(elementId).attr("player_id", jogador.user.id);
    $(tokenId).attr("player_id", jogador.user.id);
    if(rodada_atual.jogador_id == jogador.user.id)
      $("#area_player_" + (Number(index_jogador) + 1)).css("color", "white");
    else
      $("#area_player_" + (Number(index_jogador) + 1)).css("color", "black");
  }

  for(index_s in $jogadores){
    var status = $jogadores[index_s].status;
    status.jogador_id =  $jogadores[index_s].user_id;
    if(1){
      walk(status, false);
    }

    // else{
    //   clearInterval($controleTurnoIntervalo);
    //   var walkInterval = setInterval(function(){
    //     console.log("running");
    //     walk(status, true);
    //     clearInterval(walkInterval);
    //     controlarTurno();
    //   }, 8000);
    // }
  }
  $firstLoad = false;
}

function prepareTurno(){
  $("#resultadoAnswer").modal("hide");

  if($inicioRodada){
      $seu_turno.play();
      $inicioRodada = false;
  }

  $("#snake_show").hide();
  $("#waitGameArea").modal("hide");
  $atualizarTurno = false;
  var rodada_atual = this.getRodadaAtual();
  $fichas = JSON.parse(rodada_atual.fichas);

  attFichas();
}

function prepareEspectador(configuration){
  $("#snake_show").show();
  for(i = 1; i <= 5; i++)
    disableFicha($("#ficha_" + i));

  $("#questionArea").hide();
  if(!$snake_never){

    if(!$("#waitGameArea").is(":visible")){
      $turno_outros.play();
    }
    $("#waitGameArea").modal("show");
  }

}

function finishGame(){
  $("#waitGameArea").modal("hide");
  var finishMessage;
  if($user_id === $status.vencedor_id){
    $eh_nois_mano.play();
    finishMessage = "PARABÉNS! YOU HAVE THE POWER";
  }else{
    $fucking_shit.play();
    finishMessage = "TA DE SACANAGEM? TU PERDEU CACETE!";
  }
  var counter = 5;
  var redirectCounter = setInterval(function(){
      $("#redirectMessage").text(counter--);
      if(counter == 0){
        clearInterval(redirectCounter);
        window.location.replace("./home");
      }
  }, 1000);

  $("#finishMessage").text(finishMessage);
  $("#modalFinish").modal("show");
}

function finishByDesistencia(){
  $("#waitGameArea").modal("hide");
  var finishMessage;

  $oh_shit.play();
  finishMessage = "PARECE Q VC SOBROU NESSA AMIGÃO... N FOI DESSA VEZ QUE CONQUISTOU SUA VITÓRIA...";

  var data = {user_id: $user_id};
  desistirPartida(data, function(response){
    console.log(response);
  });

  var counter = 5;
  var redirectCounter = setInterval(function(){
      $("#redirectMessage").text(counter--);
      if(counter == 0){
        clearInterval(redirectCounter);
        window.location.replace("./home");
      }
  }, 1000);

  $("#finishMessage").text(finishMessage);
  $("#modalFinish").modal("show");
}

function statusTurno(){
  $jogadores = $status.jogadores;
  $temas = $status.temas;


  if($status.jogadores.length == 1){
    finishByDesistencia();
    return;
  }

  if($status.vencedor_id != null || this.getRodadaAtual().posicao >= 22){
    finishGame();
    return;
  }
  setGeneral();
  $rodadas = null;
  var rodada_atual = this.getRodadaAtual();
  if($user_id !== rodada_atual.jogador_id)
    prepareEspectador();
  else
    prepareTurno();
}

function updateTurnoTimer(){
  var secAtual = Number($("#turno_timer").text());
  $("#turno_timer").text(--secAtual);

  if(secAtual <= 0){
    selectAnswer(true);
  }
}

function setCategorias(){
  requestCategorias(function(categorias){
    $categorias = categorias;
    var html = "";
    for(key in categorias){
      html += "<div class='col-lg-12'> Titulo: " +
        categorias[key].titulo + " - Descriçaõ: " + categorias[key].descricao
        +"</div>";
    }
    $("#categoriasArea").append(html);
  });
}

function controlarTurno(){
  var data = {user_id: $user_id};
    requestGameStatus(data, function(status){
      $status = status;
      statusTurno();
    });
}

$(document).ready(function(){

  var data = {user_id: $user_id};
  requestGameStatus(data, function(status){
    $status = status;
    statusTurno();
  }, function(error){
    window.location.replace("/home");
  });

  $controleTurnoIntervalo = setInterval(function(){
    console.log("atualizando status da sala...");
    controlarTurno();
  }, 9000);

//  controlarTurno();

  $("#snake_show").on("click", function(){
    $snake_never = false;
    $("#waitGameArea").modal("show");
  });

  $("#snake_no_more").on("click", function(){
    $snake_never = true;
  });

  $("#forceRedirect").on("click", function(){
    window.location.replace("./home");
  });

  $("#confirmDesistencia").on("click", function(){
    var data = {user_id: $user_id};
    desistirPartida(data, function(response){
      window.location.replace("./home");
    });
  });

  $("#sairPartida").on("click", function(){
    $opa.play();
    $("#desistConfirm").modal("show");
  });

  $("#confirmFichaSelection").on("click",function(){
    console.log("limpando intervalo de turno...");
    clearInterval($intervalTurnoCounter);
    clearInterval($controleTurnoIntervalo);
    intervalo = setInterval(function(){
      updateTurnoTimer();
    }, 1000);
  });
});
