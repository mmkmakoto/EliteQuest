var urlBase = "/";

function requestCreateSala(data, callback){
  var response = simulaCriacaoSala(data);
  callback(response);
}

function requestIniciarPartida(data, callback){
  var response = simulaIniciarPartida(data);
  callback(response);
}

function requestCheckSala(data, callback){
  var response = simulaPartidaCriada(data);
  callback(response);
  // $.ajax({
  //   url: urlBase + "api/categorias/all",
  //   data: data,
  //   type: "POST",
  //   cache: false,
  //   success: callback,
  //   error: function(response){
  //     console.log("ERROR!");
  //   }
  // });
}

function requestExitSala(data, callback){
  var response = simulaSairSala(data);
  callback(response);
  // $.ajax({
  //   url: urlBase + "api/categorias/all",
  //   data: data,
  //   type: "POST",
  //   cache: false,
  //   success: callback,
  //   error: function(response){
  //     console.log("ERROR!");
  //   }
  // });
}

function requestDeleteSala(data, callback){
  var response = simulaDeleteSala(data);
  callback(response);
  // $.ajax({
  //   url: urlBase + "api/salas/all",
  //   type: "GET",
  //   cache: false,
  //   success: callback,
  //   error: function(response){
  //     console.log("ERROR!");
  //   }
  // });
}

function fetchSala(data, callback){
  var response = simulaCheckSala(data);
  callback(response);
}

function fetchSalas(callback){

  callback(salas_simulator);

  // $.ajax({
  //   url: urlBase + "api/salas/all",
  //   type: "GET",
  //   cache: false,
  //   success: callback,
  //   error: function(response){
  //     console.log("ERROR!");
  //   }
  // });
}

function requestEntrarSala(data, callback){
  var response = simulaJoinSala(data);
  callback(response);
  // $.ajax({
  //   url: urlBase + "api/categorias/all",
  //   data: data,
  //   type: "POST",
  //   cache: false,
  //   success: callback,
  //   error: function(response){
  //     console.log("ERROR!");
  //   }
  // });
}
