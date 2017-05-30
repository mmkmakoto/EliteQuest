var intervalo = null;
var $question = null;
var $jogador = null;
var $atualizarTurno = true;
var $categiruas = null;
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
  for(player in $status.partida){
    var jogador = $status.partida[player].jogador;
    $("#name_" + player).text(jogador.nome);
    if(jogador.seu_turno)
      $("#area_" + player).css("color", "white");
    walk(player, jogador.posicao);
  }
}

function prepareTurno(){
  //alert("É a sua vez de jogar " + jogador.nome);
  $atualizarTurno = false;
  $fichas = $status.partida.player_1.fichas;
}

function prepareEspectador(configuration){
  $("#questionArea").hide();
}

function statusTurno(){
  console.log("buscando status do turno...");
  $jogador = $status.partida.player_1.jogador;
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

  setCategorias();
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
