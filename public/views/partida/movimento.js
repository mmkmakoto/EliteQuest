//left / top / max left / max top
var $token_path = {
    token_player_1 : [[130, 30], [80,50], [20, 170],[45, 245],[25, 320],[25, 430],[55, 505],[155, 525],[250, 460],[295, 420],[380, 350],
                [440, 310],[530, 240],[590, 190],[675, 90],[730, 95],[770, 130],[770, 180],[765, 270],[765, 320],[770, 400], [750,440], [690, 500]],

    token_player_2 : [[170, 40], [75,90], [55, 180],[20, 275],[25, 365],[35, 465],[100, 530],[205, 495],[250, 425],[330, 390],[385, 315],
                [480, 275],[525, 160],[630, 160],[670, 125],[745, 60],[830, 140],[830, 190],[830, 290],[830, 335],[830, 420], [760,510], [690, 500]],

    token_player_3 : [[135, 70], [40,100], [25, 205],[75, 285],[55, 345],[85, 410],[90, 500],[165, 490],[210, 430],[290, 385],[340, 310],
                [430, 275],[520, 200],[580, 120],[670, 50],[720, 30],[820, 80],[797, 200],[830, 240],[797, 330],[830, 380], [810,470], [690, 500]],

    token_player_4 : [[170, 85], [85,125], [90, 180],[85, 240],[85, 360],[65, 440],[105, 470],[160, 450],[240, 390],[300, 350],[370, 280],
                [435, 240],[480, 210],[585, 155],[635, 75],[780, 40],[800, 110],[765, 215],[800, 260],[770, 355],[802, 400], [770,470], [690, 500]]
};

function walk(status, effect){
  //var status_atual = getRodadaAtual();
  //var atualPos = status_atual.posicao;
  console.log("moving...");
  var atualPos = Number($("#pos_player_"  + status.jogador_id).text());
  var newPos = status.posicao;
  var $element = $('.token[player_id="' + status.jogador_id + '"]');


  if((atualPos != newPos)){
    $("#pos_player_" + status.jogador_id).text(newPos);
  }

 move(status, $element, effect, atualPos, newPos);
 atualPos = newPos;
}

function moveWithEffect(status, posAtual, posNew, token_id, position_token){
$("#" + token_id).addClass("rotated-right");
  var moveInterval  = setInterval(function(){
    $("#" + token_id).toggleClass("rotated-right");
    $("#" + token_id).toggleClass("rotated-left");
  }, 300);
  var pos_ini, pos_fim, pos_to_go;
  //$("#" + token_id).css('left', pos_ini[position][0] + "px");
  //$("#" + token_id).css('top', pos_fim[position][1] + "px");

    var id = setInterval(function(){
      pos_to_go = posAtual + 1;
      pos_ini = position_token[posAtual];
      pos_fim = position_token[pos_to_go];

      if((frame_left() && frame_top())){
        posAtual++;
      }


      if(posAtual === posNew || posAtual >= 22){
        $audio_walk.pause();
        $audio_walk.currentTime = 0;
        clearInterval(id);
        clearInterval(moveInterval);
        $("#" + token_id).removeClass("rotated-right");
        $("#" + token_id).removeClass("rotated-left");
        if(posNew >= 21){
          $status.vencedor_id = status.jogador_id;
          finishGame();
        }
      }

    }, 10);

  // var top_finish = steps;
  // var strTop = $("#" + token_id).css('top').split("");
  // var strLeft = $("#" + token_id).css('left').split("");
  // strTop.pop(); strLeft.pop();
  // strTop.pop(); strLeft.pop();
  // var top_pos = Number(strTop.join(""));
  // var left_pos = Number(strLeft.join(""));
  // var finish_left = left_pos += -20;
  function frame_top(){
    if(pos_ini[1] == pos_fim[1]){
      return true;
    }else{
      //position_init[0]--;
      if(pos_ini[1] > pos_fim[1]){
        pos_ini[1]--;
      }else{
        pos_ini[1]++;
      }

      $("#" + token_id).css('top', pos_ini[1] + "px");
      //elem.style.left = pos_ini[0];
      //elem.style.top = position_finish[0];
    }
    return false;
  }


  function frame_left(){
    if(pos_ini[0] == pos_fim[0]){
      return true;
    }else{
      //position_init[0]--;
      if(pos_ini[0] > pos_fim[0]){
        pos_ini[0]--;
      }else{
        pos_ini[0]++;
      }
      $("#" + token_id).css('left', pos_ini[0] + "px");
      //elem.style.left = pos_ini[0];
      //elem.style.top = position_finish[0];
    }
    return false;
  }

}

function moveWithoutEffect(status, position, token_id, position_token){
  $("#" + token_id).css('left', position_token[position][0] + "px");
  $("#" + token_id).css('top', position_token[position][1] + "px");
}

function move(status, $element, effect, posAtual, posNew){
  var token_id = $element.attr("id");
  var position_token = $token_path[token_id];

  var $pos = $("#" + token_id);

  var position_init = [];
  // position_init.push(Number($pos.css('left').replace(/[^-\d\.]/g, '')));
  // position_init.push(Number($pos.css('top').replace(/[^-\d\.]/g, '')));

  //var position_init = position_token[position];
  //var position_finish = position_token[steps];

// moveWithoutEffect(status, posNew, token_id, position_token);
// return;

  if(!effect && posAtual >= 0){
    moveWithoutEffect(status, posNew, token_id, position_token);
  }else{
    moveWithEffect(status, posAtual, posNew, token_id, position_token);
  }

  return;

function frame(){
  if(position_init[1] == position_finish[1]){
    clearInterval(id);
  }else{
    //position_init[0]--;
    position_finish[0]++;
    elem.style.left = position_init[0];
    //elem.style.top = position_finish[0];
  }
}



  // function frame(){
  //   if(top_pos == top_finish){
  //     clearInterval(id);
  //   }else{
  //     top_pos++;
  //     elem.style.top = top_pos + 'px';
  //   }
  // }
  //
  // function can_go_down(){
  //
  // }
  //
  // function can_go_left(){
  //
  // }
}
