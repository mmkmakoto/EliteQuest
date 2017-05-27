var questions;

var question1 = {
  "id": 1,
  "enunciado": "this is real world?",
  "respostas": {
    "a": {
      "id": 1,
      "valor": "yes"
    },
    "b": {
      "id": 2,
      "valor": "no"
    },
    "c": {
      "id": 3,
      "valor": "maybe"
    },
    "d": {
      "id": 4,
      "valor": "really?"
    }
  }
}

var question2 = {
  "id": 2,
  "enunciado": "sou melhor que...",
  "respostas": {
    "a": {
      "id": 1,
      "valor": "seu amigo"
    },
    "b": {
      "id": 2,
      "valor": "seu marido"
    },
    "c": {
      "id": 3,
      "valor": "esculacho - pode estar errado isso"
    },
    "d": {
      "id": 4,
      "valor": "sou foda"
    }
  }
}

var question3 = {
  "id": 3,
  "enunciado": "I have...",
  "respostas": {
    "a": {
      "id": 1,
      "valor": "oi?"
    },
    "b": {
      "id": 2,
      "valor": "ta de brincation with me, cara?"
    },
    "c": {
      "id": 3,
      "valor": "the power"
    },
    "d": {
      "id": 4,
      "valor": "ma oe"
    }
  }
}

var question4 = {
  "id": 4,
  "enunciado": "Não quero falar",
  "respostas": {
    "a": {
      "id": 1,
      "valor": "com a globo"
    },
    "b": {
      "id": 2,
      "valor": "como o SBT"
    },
    "c": {
      "id": 3,
      "valor": "morre diabo"
    },
    "d": {
      "id": 4,
      "valor": "( ͡° ͜ʖ ͡°)"
    }
  }
}


var question5 = {
  "id": 5,
  "enunciado": "COEEEEE",
  "respostas": {
    "a": {
      "id": 1,
      "valor": "RAPAZIADA"
    },
    "b": {
      "id": 2,
      "valor": "COEEE RAPAZIADA"
    },
    "c": {
      "id": 3,
      "valor": "COEEEEE RAPAZIADAAAA"
    },
    "d": {
      "id": 4,
      "valor": "COEEEEEEEEEEEEEEEEE RAPAZIADAAAAAAAAAAAAA"
    }
  }
}

function resetzFichas(){
  console.log("resetando fichas....");
  var fichas =  $status.partida.player_1.fichas;
  var fichasZeradas = true;
  for(ficha in fichas){
    if($status.partida.player_1.fichas[ficha].disponivel)
      fichasZeradas = false;
  }

  console.log(fichasZeradas);

  if(fichasZeradas){
    for(ficha in fichas){
      $status.partida.player_1.fichas[ficha].disponivel = true;
    }
  }
}

function getResponseForRandomQuestion(answer){
  var response = {};
  response["respondido"] = true;
  switch(answer.id_pergunta){
    case 1:
    response["correto"] = (answer.opcao === 1);
    break;
    case 2:
    response["correto"] = (answer.opcao === 1);
    break;
    case 3:
    response["correto"] = (answer.opcao === 1);
    break;
    case 4:
    response["correto"] = (answer.opcao === 1);
    break;
    case 5:
    response["correto"] = (answer.opcao === 1);
    break;
  }

  var fichas =  $status.partida.player_1.fichas;
  for(ficha in fichas){
    if($status.partida.player_1.fichas[ficha].valor === answer.ficha){
      $status.partida.player_1.fichas[ficha].disponivel = false;
    }
  }

  console.log($status.partida.player_1.fichas);


  if(response.correto){
    $status.partida.player_1.jogador.posicao += answer.ficha;
    response.nova_posicao = $status.partida.player_1.jogador.posicao;
  }else {
    response.nova_posicao = 0;
  }
  resetzFichas();
  return response;
}

function getRandomQuestion(){
  var questionNum;
  questionNum = Math.floor(((Math.random() * 5)));

  return questions[questionNum];
}

$(document).ready(function(){
  questions = [question1, question2, question3, question4, question5];
});
