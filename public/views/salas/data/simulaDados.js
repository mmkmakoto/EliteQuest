var idSimulator = 2;

var partidas = [];

function simulaPartidaCriada(data){
  return partidas;
}

function simulaIniciarPartida(data){
  partidas.push(data.id_sala);
  return partidas;
}

function simulaJoinSala(data){
  var sala = salas_simulator.filter(function(s){
    return s.id === data.id_sala;
  })[0];
  sala.jogadores.push($user);
  return sala;
}

function simulaCheckSala(data){
  var sala = salas_simulator.filter(function(s){
    return s.id === data.id_sala;
  })[0];
  return sala;
}

function simulaSairSala(data){
  var sala = salas_simulator.filter(function(s){
    return s.id === data.id_sala;
  })[0];

  sala.jogadores = sala.jogadores.filter(function(j){
    return j.id != data.id_jogador;
  });

  return salas_simulator;
}

function simulaDeleteSala(data){
  salas_simulator = salas_simulator.filter(function(s){
    return s.id !== data.id_sala;
  });

  return salas_simulator;
}

function simulaCriacaoSala(data){
  idSimulator++;
  data.jogadores = [];
  data.jogadores.push($user);
  data.id = idSimulator;
  data.aberta = 1;

  salas_simulator.push(data);
  return data;
}

var salas_simulator = [
  {
    id: 2,
    jogador_id: 3,
    dificuldade_id: 2,
    max_jogadores: 4,
    jogadores: [
      {
        id: 2,
        nome: "jogador 1"
      },
      {
        id: 21,
        nome: "jogador 2"
      },
      {
        id: 11,
        nome: "jogador 3"
      }
    ],
    aberta: 1
  },
  {
    id: 1,
    jogador_id: 10,
    dificuldade_id: 1,
    max_jogadores: 4,
    jogadores: [
      {
        id: 1,
        nome: "jogadorzz 1"
      },
      {
        id: 10,
        nome: "jogadorz 2"
      },
      {
        id: 4,
        nome: "jogadorz 3"
      }
    ],
    aberta: 1
}]
