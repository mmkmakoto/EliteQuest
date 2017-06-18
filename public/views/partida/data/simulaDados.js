var rodadaId = 4;

function simulaRodada(dados){
    rodadaId++;
    var lastRodada = Object.assign({}, getRodadaAtual());
    lastRodada.id = rodadaId;
    for(var i in lastRodada.stats_jogadores){
      var s = lastRodada.stats_jogadores[i];
      if(s.jogador_id === $user_id){
        var fichas = JSON.parse(s.fichas);
        fichas = fichas.filter(function(f){return f !== dados.ficha});
        if(fichas.length == 0)
          s.fichas = "[1,2,3,4,5]"
        else {
          s.fichas = JSON.stringify(fichas);
        }
        s.posicao += dados.ficha;
        console.log(s.posicao);
      }
    }

    $status.rodadas.push(lastRodada);
    console.log($status);
}
