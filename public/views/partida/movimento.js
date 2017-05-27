function walk(jogador, newPos, efect){
  var atualPos = Number($("#pos_" + jogador).text());
  if(newPos != atualPos)
    $("#pos_" + jogador).text(newPos);

  if(efect)
    console.log("REALIZAR EFEITO DE WALK!");
}
