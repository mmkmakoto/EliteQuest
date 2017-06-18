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


		$this->statusPartida(new Request([
			'user_id' =>1,
		]));
	}

	public function statusPartida(Request $request){
		//Receber o user_id e determinar qual partida enviar
		$jogador = Jogador::with(['partidas' => function($query){
			$query->where('vencedor_id',null);
		}])->where('user_id',$request->user_id)->first();
		

		$partida = new PartidaRepository($jogador->partidas->first());
		

		dd($partida->proximaRodada());

		dd($partida->getStatus());

		return response()->json($partida->getStatus());

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