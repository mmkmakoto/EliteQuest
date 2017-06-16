var intervalo = null;
var $question = null;
var $jogadores = null;
var $eu = null;
var $rodadas = null;
var $atualizarTurno = true;
var $categorias = null;
var $audio = new Audio('./../../assets/starman.mp3');
var $snake_never = false;
var $first_load = true;
////////////////////////////////////////

function getRodadaAtual(){
  $rodadas = $status.rodadas;
  return $rodadas[$rodadas.length - 1];
}

function setGeneral(){
  var mine_id = 3;
  var rodada_atual  = this.getRodadaAtual();
  //move(true, 7, 12);
  $eu = $jogadores.filter(function(j){return j.id === mine_id})[0];
  $eu.id;
  for(index_jogador in $jogadores){
    var jogador = $jogadores[index_jogador];
    var elementId = "#name_player_" + (Number(index_jogador) + 1);
    var tokenId = "#token_player_" + (Number(index_jogador) + 1);
    $(elementId).text(jogador.user.name);
    $(elementId).attr("player_id", jogador.user.id);
    $(tokenId).attr("player_id", jogador.user.id);
    if(rodada_atual.jogador_id == jogador.user.id)
      $("#area_player_" + (Number(index_jogador) + 1)).css("color", "white");
  }

  for(index_s in rodada_atual.stats_jogadores){
    var status = rodada_atual.stats_jogadores[index_s];
    walk(status, false);
  }
}

function prepareTurno(){
  //alert("É a sua vez de jogar " + jogador.nome);
  $("#waitGameArea").modal("hide");
  $atualizarTurno = false;
  var rodada_atual = this.getRodadaAtual();
  var meu_status = rodada_atual.stats_jogadores.filter(function(s){return s.jogador_id === $eu.id})[0];
  $fichas = JSON.parse(meu_status.fichas);

  attFichas();
}

function prepareEspectador(configuration){
  for(i = 1; i <= 5; i++)
    disableFicha($("#ficha_" + i));

  $("#questionArea").hide();
  if(!$snake_never){
    $("#waitGameArea").modal("show");
  }

}

function finishGame(){
  var finishMessage;
  if($eu == null)
    finishMessage = "Que pena! parece que esse jogo n existe mais!";
  else if($eu.id === $status.vencedor_id)
    finishMessage = "PARABÉNS! YOU HAVE THE POWER";
  else
    finishMessage = "TA DE SACANAGEM?";
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
  setGeneral();
  if($status.vencedor_id != null){
    finishGame();
    return;
  }
  $rodadas = null;
  var rodada_atual = this.getRodadaAtual();
  if($eu.id !== rodada_atual.jogador_id)
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



$(document).ready(function(){
  // this.setCategorias();
  //move(1);
  requestStatus(function(status){
    $status = status;
    statusTurno();
  });

  setInterval(function(){
    requestStatus(function(status){
      $status = status;
      statusTurno();
    });
  }, 5000);

  $("#snake_no_more").on("click", function(){
    $snake_never = true;
  });

  $("#forceRedirect").on("click", function(){
    window.location.replace("./home");
  });

  $("#confirmFichaSelection").on("click",function(){
    intervalo = setInterval(function(){
      updateTurnoTimer();
    }, 1000);
  });
});
