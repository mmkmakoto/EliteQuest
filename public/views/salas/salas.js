$(document).ready(function(){
  $("#criar_sala").on("click", function(){
    criarSala();
  });

  $(".btn_entrar_sala").on("click", function(){
    var id_sala = Number($(this).attr("idSala"));
    entrarSala(id_sala);
  });
});

function entrarSala(id_sala){
  var obj = {
    id_jogador: $user_id,
    id_sala: id_sala
  }
  requestEntrarSala(obj, function(response){
    console.log(response);
  });
}

function criarSala(){
  $("#newSala").modal("show");
}
