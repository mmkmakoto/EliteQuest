<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pergunta;

use App\Models\Partida;

class GameController extends Controller
{
	public function gameStatus()
	{
		$partida = Partida::with(['jogadores.user','dificuldade'])->first();

		return response()->json($partida);
		//return response()->json(Auth::user());
	}

	public function gamePergunta()
	{
		$pergunta = Pergunta::with(['dificuldade','tema','respostas'])->get()->random();
		return response()->json($pergunta);
	}
}