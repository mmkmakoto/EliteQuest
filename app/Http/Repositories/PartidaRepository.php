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
		//$this->proximaRodada();
	}

	public function proximaRodada(){
		//Criar a rodada a ser jogada;

		//Checar se há rodadas
		$rodadas = $this->partida->rodadas;

		if($rodadas->count()==0){
			//dd('iniciando primeira rodada!');

			$ordem = collect(json_decode($this->partida->ordem_de_turno));
			$pergunta = $this->partida->temas->first()->perguntas->shuffle()->first();
			$jogador_id = $ordem->first();

			$rodada = Rodada::create([
				'partida_id' => $this->partida->id,
				'jogador_id' => $jogador_id,
				'posicao' => 0,
				'fichas' => json_encode([1,2,3,4,5]),
				'pergunta_id' => $pergunta->id,
				'resposta_id' => null,
			]);

			dd($rodada);
		}
		else{

			$jogador_id = $this->proximoPlayer();
			$temas = $this->partida->temas;

			dd($temas);


			dd('iniciando nova rodada');
		}



		return "";
	}

	Public function receberResposta(){

	}

	private function proximoPlayer(){
		$lastPlayer = $this->partida->rodadas->sortByDesc('id')->first()->jogador_id;
		$ordem = collect(json_decode($this->partida->ordem_de_turno));
		$players = $ordem->count();
		$key = $ordem->flip()[$lastPlayer];
		$key++;
		if($key >= $players){
			$key = 0;
		}
		return $ordem[$key];		
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