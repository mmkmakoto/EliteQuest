var intervalo = null;
var $question = null;
var $jogador = null;
var $atualizarTurno = true;
////////////////////////////////////////

function requestTurno(dataToSend){
  $.ajax({
    url: "url",
    type: "GET",
    cache: false,
    data: dataToSend,
    success: function(response){
      console.log(response);
    },
    error: function(response){
      console.log("ERROR!");
    }
  });
}

function setGeneral(){
  for(player in $status){
    var jogador = $status[player].jogador;
    $("#name_" + player).text(jogador.nome);
    walk(player, jogador.posicao);
  }
}

function prepareTurno(){
  //alert("É a sua vez de jogar " + jogador.nome);
  $atualizarTurno = false;
  $fichas = $status.player_1.fichas;
}

function prepareEspectador(configuration){
  $("#questionArea").hide();
}

function statusTurno(){
  console.log("buscando status do turno...");
  $jogador = $status.player_1.jogador;
  if($jogador != null)
    if($jogador.seu_turno){
      if($question == null)
        $("#fichasArea").show();
      attFichas();
      if($atualizarTurno){
        prepareTurno();
      }
    }else
      prepareEspectador();

      setGeneral();
}

function updateTurnoTimer(){
  var secAtual = Number($("#turno_timer").text());
  $("#turno_timer").text(++secAtual);

  if(secAtual >= 30){
    selectAnswer(true);
  }
}

$(document).ready(function(){
  statusTurno();
  setInterval(function(){
    statusTurno();
  }, 5000);

  $("#confirmFichaSelection").on("click",function(){
    intervalo = setInterval(function(){
      updateTurnoTimer();
    }, 1000);
  });
});
