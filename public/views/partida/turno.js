var intervalo = null;
var $question = null;
var $jogadores = null;
var $eu = null;
var $rodadas = null;
var $atualizarTurno = true;
var $categiruas = null;
////////////////////////////////////////

function getRodadaAtual(){
  $rodadas = $status.rodadas;
  return $rodadas[$rodadas.length - 1];
}

function setGeneral(){
  var rodada_atual  = this.getRodadaAtual();
  $eu = $jogadores.filter(function(j){return j.id === 3})[0];
  for(index_jogador in $jogadores){
    var jogador = $jogadores[index_jogador];
    var elementId = "#name_player_" + (Number(index_jogador) + 1);
    $(elementId).text(jogador.user.name);
    $(elementId).attr("player_id", jogador.user.id);
    if(rodada_atual.jogador_id == jogador.user.id)
      $("#area_player_" + (Number(index_jogador) + 1)).css("color", "white");
  }

  for(index_s in rodada_atual.stats_jogadores){
    var status = rodada_atual.stats_jogadores[index_s];
    walk("player_" + status.jogador_id, status.posicao);
  }
}

function prepareTurno(){
  //alert("É a sua vez de jogar " + jogador.nome);
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
}

function finishGame(){
  var finishMessage;

  if($eu == null)
    finishMessage = "Que pena! parece que esse jogo n existe mais!";
  else if($eu.id === $status.vencedor_id)
    finishMessage = "PARABÉNS! YOU HAVE THE POWER";
  else
    finishMessage = "TA DE SACANAGEM?";

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

  var rodada_atual = this.getRodadaAtual();
  if($eu.id !== rodada_atual.jogador_id)
    prepareEspectador();
  else
    prepareTurno();

  //
  // $jogador = $status.partida.player_1.jogador;
  // if($jogador != null)
  //   if($jogador.seu_turno){
  //     if($question == null)
  //
  //       $("#fichasArea").show();
  //     attFichas();
  //     if($atualizarTurno){
  //       prepareTurno();
  //     }
  //   }else
  //     prepareEspectador();
  //
  //     setGeneral();
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

  requestStatus(function(status){
    $status = status;
    statusTurno();
  });

  setInterval(function(){
    requestStatus(function(status){
      $status = status;
      statusTurno();
    });
  }, 15000);

  $("#confirmFichaSelection").on("click",function(){
    intervalo = setInterval(function(){
      updateTurnoTimer();
    }, 1000);
  });
});
