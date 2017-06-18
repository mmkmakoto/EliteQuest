var urlBase = "/";

function requestCreateSala(data, callback){
  // var response = simulaCriacaoSala(data);
  // callback(response);
    $.ajax({
    url: urlBase + "api/salas/create",
    data: data,
    type: "POST",
    cache: false,
    success: callback,
    error: function(response){
      console.log("ERROR!");
    }
  });
}

function checkSalaExist(sala_id, callback){

}

function requestIniciarPartida(data, callback){
    $.ajax({
      url: urlBase + "api/salas/start",
      data: data,
      type: "POST",
      cache: false,
      success: callback,
      error: function(response){
        console.log("ERROR!");
      }
    });
}

function requestGameStatus(callback){
  $.ajax({
    url: urlBase + "api/game_status",
    type: "GET",
    cache: false,
    success: callback,
    error: function(response){
      console.log("ERROR!");
    }
  });
}

function requestCheckSala(user_id, callback){
  // var response = simulaPartidaCriada(data);
  // callback(response);
  $.ajax({
    url: urlBase + "api/salas/where_is/" + user_id,
    type: "GET",
    cache: false,
    success: callback,
    error: function(response){
      console.log("ERROR!");
    }
  });
}

function requestExitSala(data, callback){
  // var response = simulaSairSala(data);
  // callback(response);
  $.ajax({
    url: urlBase + "api/salas/exit",
    data: data,
    type: "POST",
    cache: false,
    success: callback,
    error: function(response){
      console.log("ERROR!");
    }
  });
}

function requestDeleteSala(data, callback){
  // var response = simulaDeleteSala(data);
  // callback(response);
  $.ajax({
    url: urlBase + "api/salas/close",
    data: data,
    type: "POST",
    cache: false,
    success: callback,
    error: function(response){
      console.log("ERROR!");
    }
  });
}

function fetchSala(data, callback){
  fetchSalas(function(response){
    console.log(response);
    var sala = response.filter(function(s){return data.sala_id === s.id})[0];
    callback(sala);
  });
  // var response = simulaCheckSala(data);
  // callback(response);
}

function fetchSalas(callback){

  //callback(salas_simulator);
  $.ajax({
    url: urlBase + "api/salas/all",
    type: "GET",
    cache: false,
    success: callback,
    error: function(response){
      console.log("ERROR!");
    }
  });
}

function requestEntrarSala(data, callback){
  // var response = simulaJoinSala(data);
  // callback(response);
  $.ajax({
    url: urlBase + "api/salas/join",
    data: data,
    type: "POST",
    cache: false,
    success: callback,
    error: function(response){
      console.log("ERROR!");
      console.log(response);
    }
  });
}
