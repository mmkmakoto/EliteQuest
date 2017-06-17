<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Sala;
use App\Models\Jogador;
use exception;
class SalasController extends Controller
{
	public function teste(){
		

		//TESTANDO JOIN
		dd($this->join(new Request([
			'user_id' => 2,
			'sala_id' => 1,
		])));


		//TESTANDO CREATE
		dd($this->create(new Request([
			'jogador_id'=>1,
			'dificuldade_id'=>1,
			'jogadores'=>4,
		])));


		//TESTANDO RETORNO ATUAL
		dd($this->retornoAtual());
	}

	private function retornoAtual(){
		return Sala::with('jogadores')->get();
	}

	public function all(){
		return response()->json($this->retornoAtual());
	}

	public function create(Request $request){
		//CRIA A SALA E RETORNA AS SALAS
		try{
			Sala::create($request->all());
			return response()->json($this->retornoAtual()); 

		}catch(exception $error){
			return response()->json(false);
		}
	}

	public function join(Request $request){
		//O USER JOIN A SALA X E RETORNA AS SALAS
		

		$jogador = Jogador::where('user_id',$request->user_id)->first();
		dd($jogador);
	}

	public function exit(Request $request){


	}

	public function close(Request $request){


	}

	public function start(Request $request){


	}
}