function desistirDaPartida(){
	var data = {user_id: $user_id};
	requestDesistirPartida(data, function(response){
		if(response){
			window.location.replace("/home");
		}
	});
}

$(document).ready(function(){
  $("#desistir_partida").on("click", function(){
    desistirDaPartida();
  });
});