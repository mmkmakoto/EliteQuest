var checkSalaInterval;
var attSalaStatusInterval;
$(document).ready(function(){
  carregarSalas();

  $("#nova_sala").on("click", function(){
    $("#newSala").modal("show");
  });

  $("#criar_sala").on("click", function(){
    criarSala();
  });

  setInterval(function(){
    carregarSalas();
    console.log("loading salas...");
  }, 5000);

});

function constroiListaSalas(salas){
  var html = "";

  for(var salaIndex in salas){
    var sala = salas[salaIndex];
    html += "<tr><th class='center col-md-4' scope='row'>"+ sala.id +"</th>";
    html += "<td class='col-md-6'>" + sala.jogadores.length + "/" + sala.max_jogadores  + "</td>";
    if(sala.jogadores.length < sala.max_jogadores)
      html += "<td class='col-md-2'><button style='width: 100px;' idSala='" + sala.id + "' onClick='entrarSala(" + sala.id + ")' class='btn btn-success btn_entrar_sala'>Entrar</button></td>";
    else
      html += "<td class='col-md-2'><button style='width: 100px;' idSala='" + sala.id + "' class='btn btn-danger btn_entrar_sala disabled'>Cheia</button></td>";
    html += "</tr>";
  }

  $("#body_table_salas").html(html);

  // <tr>
  //   <th class="center col-md-4" scope="row">1</th>
  //   <td class="col-md-6">2/4</td>
  //   <td class="col-md-2">
  //     <button style="width: 100px;" idSala="1" class="btn btn-success btn_entrar_sala">Entrar</button>
  //   </td>
  // </tr>
}

function inSala(sala){
  $("#id_sala").text(sala.id);
  var dificuldade;
  switch(sala.dificuldade_id){
    case 1:
      dificuldade = "Fácil";
      break;
    case 2:
        dificuldade = "Médio";
        break;
    case 3:
      dificuldade = "Difícil";
      break;
  }
  $("#dificuldade").text(dificuldade);

  $("#num_jogadores").text("[" + sala.jogadores.length + "/" + sala.max_jogadores + "]");

  if(sala.aberta === 1)
    $("#status_sala").text("Esperando jogadores...");

  var html = "";
  for(var i in sala.jogadores){
    var jogador = sala.jogadores[i];
    html += "<tr><td>" + jogador.nome + "</td></tr>";
  }

  var btnHtmlStart = "";
  var btnHtmlExit = "";
  if(sala.jogador_id === $user.id){
    btnHtmlStart = '<button type="button" onClick="iniciarPartida('+ sala.id +')" class="btn btn-success" id="criar_sala" data-dismiss="modal">Começar jogo</button>';

    if(sala.jogadores.length < 2)
      btnHtmlStart = '<button type="button" class="btn btn-primary disabled" id="criar_sala">Aguardando o mínimo de jogadores...</button>';

    btnHtmlEnd = '<button type="button" onClick="deleteSala(' + sala.id + ')" class="btn btn-danger" data-dismiss="modal">Fechar a sala</button>';
  }else{
    btnHtmlStart = '<button type="button" class="btn btn-primary disabled" id="criar_sala">Aguardando inicio...</button>';
    btnHtmlEnd = '<button type="button" onClick="exitSala(' + sala.id + ')" class="btn btn-danger" data-dismiss="modal">Sair da sala</button>';
  }

  $("#footer_inSala").html(btnHtmlStart + btnHtmlEnd);

  $("#body_table_sala").html(html);

  $("#sala").modal("show");

  checkSalaInterval = setInterval(function(){
    checkSalaCreated(sala.id);
  }, 3000);

  var data = {id_sala: sala.id};
  clearInterval(attSalaStatusInterval);
  attSalaStatusInterval = setInterval(function(){
      console.log("atualizando status da sala...");
      fetchSala(data, function(response){
        inSala(response);
      });
    }, 5000);
}

function checkSalaCreated(id_sala){
  var data = {id_sala: id_sala};
  requestCheckSala(data, function(response){
    if (response.length > 0){
      window.location.replace('/partida');
    }
  });
}

function carregarSalas(){
   fetchSalas(function(response){
     var salas = response;
     constroiListaSalas(salas);
   });
}

function entrarSala(id_sala){
  var obj = {
    id_jogador: $user.id,
    id_sala: id_sala
  }

  requestEntrarSala(obj, function(response){
    inSala(response);
  });
}

function exitSala(id_sala){
  var data = {
    id_sala: id_sala,
    id_jogador: $user.id
  }
  requestExitSala(data, function(response){
    console.log(response);
    clearInterval(checkSalaInterval);
    clearInterval(attSalaStatusInterval);
  });
}

function deleteSala(id_sala){
  var data = {id_sala: id_sala};
  requestDeleteSala(data, function(response){
    console.log(response);
    clearInterval(checkSalaInterval);
    clearInterval(attSalaStatusInterval);
  });
}

function criarSala(){
  var dificuldade = $("#criar_sala_dificuldade").val();
  var num_jogadores = $("#numero_jogadores").val();

  var newSala = {
    jogador_id: $user.id,
    dificuldade_id: Number(dificuldade),
    max_jogadores: Number(num_jogadores)
  }

  requestCreateSala(newSala, function(response){
    inSala(response);
  });

}

function iniciarPartida(id_sala){
  var data = {id_sala: id_sala};
  requestIniciarPartida(data, function(response){
    if(response.length > 0){
      window.location.replace('/partida?partida=' + id_sala);
    }
  });
}
