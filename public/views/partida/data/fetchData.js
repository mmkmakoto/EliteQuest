var urlBase = "/";

function requestCategorias(callback){
  $.ajax({
    url: urlBase + "api/categorias/all",
    type: "GET",
    cache: false,
    success: callback,
    error: function(response){
      console.log("ERROR!");
    }
  });
}

function desistirPartida(data, callback){
  $.ajax({
    url: urlBase + "api/partida/desistir",
    type: "POST",
    data: data,
    cache: false,
    success: callback,
    error: function(response){
      console.log("ERROR!");
    }
  });
}

function answerQuestion(data, callback){
  // var response = simulaRodada(data);
  // callback(response);
  $.ajax({
    url: urlBase + "api/partida/responder",
    type: "POST",
    data: data,
    cache: false,
    success: callback,
    error: function(response){
      console.log("ERROR!");
    }
  });
}

function requestQuestion(callback){
  $.ajax({
    url: urlBase + "api/pergunta",
    type: "GET",
    cache: false,
    success: callback,
    error: function(response){
      console.log("ERROR!");
    }
  });
}

function requestGameStatus(data, callback, error){
  $.ajax({
    async: true,
    data: data,
    url: urlBase + "api/partida/status_partida",
    type: "POST",
    cache: false,
    success: callback,
    error: error
  });
}

function requestStatus(callback){
  $.ajax({
    async: true,
    url: urlBase + "api/game_status",
    type: "GET",
    cache: false,
    success: callback,
    error: function(response){
      console.log("ERROR!");
    }
  });
}
