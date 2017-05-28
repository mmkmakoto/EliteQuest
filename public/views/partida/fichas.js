var $selectedFicha = null;

function disableFicha($fichaComponent){
  $fichaComponent.prop("disabled", true);
  $fichaComponent.addClass("btn-primary");
  $fichaComponent.removeClass("btn-success");
}

function toggleFicha($fichaComponent){
  if ($fichaComponent.is(":disabled"))
  return;

  var fichaValue = $fichaComponent.attr("ficha");
  $selectedFicha = $status.player_1.fichas[fichaValue];

  $(".ficha").removeClass("btn-success");
  $(".ficha").removeClass("selected_ficha");
  $fichaComponent.addClass("btn-success");
  $fichaComponent.addClass("selected_ficha");
}

function selectFichaAndGetQuestion(){
  console.log("SE");
  //$("#get_question").removeClass("hidden");
  $("#questionArea").modal("show");
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
  resetarFichas();
  console.log("atualizando fichas...");
  var fichas =  $status.player_1.fichas;
  for(var key in fichas){
    var ficha = $status.player_1.fichas[String(key)];
    if(!ficha.disponivel){
      var $fichaComponent = $("#ficha_" + String(ficha.valor));
      disableFicha($fichaComponent);
    }
  }
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
