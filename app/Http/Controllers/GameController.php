<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pergunta;
use App\Models\Partida;
use App\Models\Jogador;
use App\Repositories\PartidaRepository;

class GameController extends Controller
{
	public function teste(){

		dd($this->desistir(new Request([
			'user_id' => 3,
		])));


		dd($this->enviarResposta(new Request([
			'user_id' =>1,
			'resposta_id' =>1,
			'ficha'=> 3,
			'status'=>'ok',
		])));



		dd($this->statusPartida(new Request([
			'user_id' =>1,
		])));
	}

	public function desistir(Request $request){
		$jogador = Jogador::with(['partidas' => function($query){
			$query->where('vencedor_id',null);
		}])->where('user_id',$request->user_id)->first();


		$partidaModel = $jogador->partidas->first();
		if($partidaModel){
			$partida = new PartidaRepository($partidaModel);
			return response()->json($partida->playerDesistiu($request->all()));
		}else{
			return response()->json(false);
		}


	}

	public function statusPartida(Request $request){
		//Receber o user_id e determinar qual partida enviar
		$jogador = Jogador::with(['partidas' => function($query){
			$query->where('encerrada',false);
		}])->where('user_id',$request->user_id)->first();


		if($jogador->partidas->first()){
			$partida = new PartidaRepository($jogador->partidas->first());

			//return $partida->getStatus()->rodadaAtual;
			return response()->json($partida->getStatus());
		}

		else{
			$jogador = Jogador::with('partidas')->where('user_id',$request->user_id)->first();

			if($jogador->partidas->first()){
				$partida = new PartidaRepository($jogador->partidas->first());
				return response()->json($partida->getStatus());
			}
			else
			{
				return response()->json(false);
			}
		}


		//return $partida->getStatus();

	}


	public function enviarResposta(Request $request){
		$jogador = Jogador::with(['partidas' => function($query){
			$query->where('vencedor_id',null);
		}])->where('user_id',$request->user_id)->first();

		$partida = new PartidaRepository($jogador->partidas->first());

		return response()->json($partida->receberResposta($request->all()));
	}


	public function gameStatus()
	{
		$partida = Partida::with(['jogadores.user','dificuldade','rodadas.statsJogadores'])->first();

		return response()->json($partida);
		//return response()->json(Auth::user());
	}

	public function gamePergunta()
	{
		$pergunta = Pergunta::with(['dificuldade','tema','respostas'])->get()->random();
		return response()->json($pergunta);
	}
}