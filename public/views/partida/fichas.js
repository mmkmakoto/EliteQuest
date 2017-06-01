var $selectedFicha = null;

function enableFicha($fichaComponent){
  //$fichaComponent.addClass("darkableImage");
  var not_darken = "./../../assets/" + $fichaComponent.prop("id")  + ".png";
  $fichaComponent.attr("src", not_darken);
  $fichaComponent.prop("disabled", false);
  // $fichaComponent.addClass("btn-primary");
  // $fichaComponent.removeClass("btn-success");
}

function disableFicha($fichaComponent){
  //$fichaComponent.addClass("darkableImage");
  var darken = "./../../assets/darken_" + $fichaComponent.prop("id")  + ".png";
  $fichaComponent.attr("src", darken);
  $fichaComponent.prop("disabled", true);
  // $fichaComponent.addClass("btn-primary");
  // $fichaComponent.removeClass("btn-success");
}

function toggleFicha($fichaComponent){
  if ($fichaComponent.is(":disabled"))
  return;

  var fichaValue = $fichaComponent.attr("ficha");
  $selectedFicha = $fichaComponent.attr("ficha");

  $(".ficha").removeClass("btn-success");
  $(".ficha").removeClass("selected_ficha");
  //$fichaComponent.addClass("btn-success");
  $fichaComponent.addClass("selected_ficha");
}

function selectFichaAndGetQuestion(){
  //$("#get_question").removeClass("hidden");
  disableFicha($(".selected_ficha"));
  checkQuestion();
  //$("#fichasArea").hide();
}

function resetarFichas(){
  var $fichaComponent = $(".btn-primary");
  $fichaComponent.removeClass("btn-primary");
  $fichaComponent.prop("disabled", false);
}

function attFichas(){
  //resetarFichas();

for(var key in $fichas){
  var ficha = $fichas[key];
  var $fichaComponent = $("#ficha_" + String($fichas[key]));
  console.log("ficha -->" + $selectedFicha);
  if(ficha != $selectedFicha)
    enableFicha($fichaComponent);
}

  // console.log("atualizando fichas...");
  // var fichas =  $status.partida.player_1.fichas;
  // for(var key in fichas){
  //   var ficha = $status.partida.player_1.fichas[String(key)];
  //   if(!ficha.disponivel){
  //     var $fichaComponent = $("#ficha_" + String(ficha.valor));
  //     disableFicha($fichaComponent);
  //   }
  // }
}

$(document).ready(function(){
  $("#cancelFichaSelection").on("click", function(){
    $(".ficha").removeClass("btn-success");
    $(".ficha").removeClass("selected_ficha");
  });

  $("#confirmFichaSelection").on("click", function(){
    selectFichaAndGetQuestion();
    $("#fichaConfirm").modal("hide");
  });

  $(".ficha").on('click', function(){
    toggleFicha($(this));
    $("#fichaConfirm").modal("show");
  });
});
