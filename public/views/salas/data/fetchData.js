var urlBase = "/";

function requestEntrarSala(data, callback){
  callback(data);
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
