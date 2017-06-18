<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Sala;
use App\Models\Jogador;
use App\Models\Partida;
use App\Repositories\PartidaRepository;
use exception;
class SalasController extends Controller
{
	public function teste(){
		


		// //TESTANDO START		
		// dd($this->start(new Request([
		// 	'user_id' => 1,
		// 	'sala_id' => 1,
		// ])));

		// //TESTANDO CLOSE
		// dd($this->close(new Request([
		// 	'user_id' => 1,
		// 	'sala_id' => 1,
		// ])));

		// //TESTANDO EXIT
		// dd($this->exit(new Request([
		// 	'user_id' => 1,
		// 	'sala_id' => 1,
		// ])));

		//TESTANDO JOIN
		



		($this->create(new Request([
			'user_id'=>1,
			'dificuldade_id'=>1,
			'max_jogadores'=>4,
		])));

		$sala = Sala::orderBy('id','desc')->first();

		($this->join(new Request([
			'user_id' => 2,
			'sala_id' => $sala->id,
		])));
		//TESTANDO JOIN
		($this->join(new Request([
			'user_id' => 3,
			'sala_id' => $sala->id,
		])));
		//TESTANDO JOIN
		($this->join(new Request([
			'user_id' => 4,
			'sala_id' => $sala->id,
		])));

		dd($this->start(new Request([
			'user_id' => 1,
			'sala_id' => $sala->id,
		])));


		//TESTANDO CREATE
		// dd($this->create(new Request([
		// 	'jogador_id'=>1,
		// 	'dificuldade_id'=>1,
		// 	'max_jogadores'=>4,
		// ])));

		// //TESTANDO RETORNO ATUAL
		// dd($this->retornoAtual());
	}

	private function retornoAtual(){
		return Sala::with('jogadores')->where('aberta',true)->get();
	}

	public function whereIs($user_id){
		try{
			$jogador = Jogador::where('user_id',$user_id)->first();
			$sala = $jogador->salas->where('aberta',1)->first();
			return response()->json($sala);
		}catch(exception $error){
			return null;
		}
	}

	public function all(){
		return response()->json($this->retornoAtual());
	}

	public function create(Request $request){
		//CRIA A SALA E RETORNA AS SALAS
		try{
			$jogador = Jogador::where('user_id',$request->user_id)->first();
			
			$salaFill = $request->all();
			$salaFill['jogador_id'] = $jogador->id;
			$sala = Sala::create($salaFill);
			$sala->jogadores->push($jogador);
			$sala->jogadores()->sync($sala->jogadores);
			
			return response()->json($sala);

		}catch(exception $error){
			return response()->json(false);
		}
	}

	public function join(Request $request){
		//O USER JOIN A SALA X	
		try{
			$jogador = Jogador::where('user_id',$request->user_id)->first();
			$sala = Sala::with('jogadores')->find($request->sala_id);

			if($sala->max_jogadores > $sala->jogadores->count()){
				//JOIN OK

				$sala->jogadores->push($jogador);

				$sala->jogadores()->sync($sala->jogadores);
				
				return response()->json($sala);
			}
			else
			{
				//JOIN FAILED MAX PLAYERS!
				return response()->json(false);
			}
		}
		catch(exception $error){
			return response()->json(false);	
		}
	}

	public function exit(Request $request){
		//O USER EXIT A SALA X
		try{
			$jogador = Jogador::where('user_id',$request->user_id)->first();
			$sala = Sala::with('jogadores')->find($request->sala_id);

			$sala->jogadores()->detach($jogador);
	
			return response()->json($sala);

		}
		catch(exception $error){
			return response()->json(false);	
		}
	}

	public function close(Request $request){
		//O DONO DA SALA FECHA A SALA
		try{	
			$jogador = Jogador::where('user_id',$request->user_id)->first();
			$sala = Sala::find($request->sala_id);

			if($sala->jogador_id == $jogador->id){
				$sala->aberta = false;
				$sala->save();
				return response()->json($sala);
			}
			else{
				return response()->json(false);
			}
		}
		catch(exception $error){
			return response()->json(false);
		}
	}

	public function start(Request $request){
		//O DONO DA SALA STARTA O GAME
		try{	
			$jogador = Jogador::where('user_id',$request->user_id)->first();
			$sala = Sala::find($request->sala_id);

			if(($sala->jogador_id == $jogador->id) AND ($sala->aberta)){
				$sala->aberta = false;
				$sala->save();

				$partida = Partida::create([
					'dificuldade_id' => $sala->dificuldade_id,
				]);

				$partida->jogadores()->sync($sala->jogadores);

				$jogo = new PartidaRepository($partida);
				$jogo->iniciar();

				return response()->json($sala);
			}
			else{
				return response()->json(false);
			}
		}
		catch(exception $error){
			return response()->json(false);
		}
	}
}
