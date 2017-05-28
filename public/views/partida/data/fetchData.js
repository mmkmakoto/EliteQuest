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
    url: urlBase + "api/questoes/all",
    type: "GET",
    cache: false,
    success: callback,
    error: function(response){
      console.log("ERROR!");
    }
  });
}
