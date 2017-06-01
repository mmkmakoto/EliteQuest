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
