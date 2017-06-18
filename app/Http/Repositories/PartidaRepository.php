<?php

namespace App\Repositories;
use App\Models\Partida;
use App\Models\Rodada;
use App\Models\Tema;

class PartidaRepository{
	public $partida;
	public $rodadaAtual;

	public function __construct(Partida $partida){
		$this->partida = $partida;
	}

	public function iniciar(){

		$this->gerarOrdemDeTurno();
		$this->definirTemas();
		$this->proximaRodada();
	}

	public function proximaRodada(){
		//Criar a rodada a ser jogada;

		//Checar se há rodadas
		$rodadas = $this->partida->rodadas;

		if($rodadas->count()==0){
			dd('iniciando primeira rodada!');
			Rodada::create([]);
		}
		else{
			dd('iniciando nova rodada');
		}



		return "";
	}

	Public function receberResposta(){

	}

	private function definirTemas(){
		$temas = Tema::all()->shuffle()->take(4);
		$this->partida->temas()->sync($temas);		
	}

	private function gerarOrdemDeTurno(){
		$this->partida->ordem_de_turno = json_encode($this->partida->jogadores->shuffle()->pluck('id'));
		$this->partida->save();
	}

	public function getStatus(){
		return $this->partida;
	}



}