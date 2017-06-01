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
  var fichasZeradas = $fichas.length <= 0;

  if(fichasZeradas){
    for(i = 0; i<= 4; i++){
      var ficha_id = "ficha_" + (i + 1);
      var f = "./../../assets/" + ficha_id  + ".png"
      $fichas.push(i + 1);
      $("#" + ficha_id).attr("src", f);      ;
    }

    $(".ficha").prop("disabled", false);
  }
}

var $usedFichas = [];

function getResponseForRandomQuestion(answer){
  var response = {};
  response["respondido"] = true;

  //response.correto = Number($question.opcao_correta) === answer.opcao;
  response.correto = $question.respostas[answer.opcao].correta === 1;

  $usedFichas.push($selectedFicha);
  var meu_status = getRodadaAtual().stats_jogadores.filter(function(s){return s.jogador_id === $eu.id})[0];
  if(response.correto){
    //$status.partida.player_1.jogador.posicao += answer.ficha;
    response.nova_posicao = meu_status.posicao + Number(answer.ficha);

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
