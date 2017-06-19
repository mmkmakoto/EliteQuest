<?php

namespace App\Repositories;
use App\Models\Partida;
use App\Models\Rodada;
use App\Models\Tema;
use App\Models\Pergunta;
use App\Models\Jogador;

class PartidaRepository{
	public $partida;
	public $rodadaAtual;

	public function __construct(Partida $partida){
		$this->partida = $partida;
	}

	private function getRodadaAtual(){
		return $this->partida->rodadas->sortByDesc('id')->first();
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
		$ordem = collect(json_decode($this->partida->ordem_de_turno));

		$partida_id = $this->partida->id;
		$jogadorDaRodada = $this->proximoPlayer();
		$posicao = $this->getPosicaoParaPlayer($jogadorDaRodada);
		$fichas = $this->getFichaParaPlayer($jogadorDaRodada);
		$pergunta_id = $this->getPerguntaParaPosicao($posicao);

		$rodada = Rodada::create([
			'partida_id' => $partida_id,
			'jogador_id' => $jogadorDaRodada,
			'posicao' => $posicao,
			'fichas' => $fichas,
			'pergunta_id' => $pergunta_id,
			'resposta_id' => null,
		]);

		$this->rodadaAtual = $rodada;
	}

	Public function receberResposta($resposta){
		$user_id = $resposta['user_id'];


		$rodadaAtual = $this->getRodadaAtual();
		$jogador = Jogador::where('user_id',$user_id)->first();

		if($rodadaAtual->jogador_id == $jogador->id){
			//SE FOR A RODADA DO JOGADOR
			dump($resposta);
			dd($rodadaAtual);
		}else{
			return false;
		}
	}

	private function getPerguntaParaPosicao($posicao){

		$tema = $this->getTemaParaPosicao($posicao);
		$perguntasPassadas = $this->partida->rodadas->pluck('pergunta_id');

		$pergunta = Pergunta::whereNotIn('id',$perguntasPassadas)
		->where('dificuldade_id',$this->partida->dificuldade_id)
		->where('tema_id',$tema->id)->first();

		if($pergunta){
			return $pergunta->id;
		}
		else{
			return Pergunta::first()->id;
		}

	}

	private function getFichaParaPlayer($player){
		$ultimaRodadaJogador = $this->partida->rodadas->where('jogador_id',$player)->sortByDesc('id')->first();

		if($ultimaRodadaJogador){
			return $ultimaRodadaJogador->fichas;
		}
		else{
			return json_encode([1,2,3,4,5]);
		}
	}

	private function getPosicaoParaPlayer($player){

		$ultimaRodadaJogador = $this->partida->rodadas->where('jogador_id',$player)->sortByDesc('id')->first();

		if($ultimaRodadaJogador){
			return $ultimaRodadaJogador->posicao;
		}
		else{
			return 0;
		}

	}

	private function getTemaParaPosicao($posicao){
		if($posicao==0){
			return $this->partida->temas->shuffle()->first();
		}
		else{
			$temaKey = ($posicao-1) %$this->partida->temas->count();
			return $this->partida->temas[$temaKey];
		}
	}

	private function proximoPlayer(){

		$rodadas = $this->partida->rodadas;
		$ordem = collect(json_decode($this->partida->ordem_de_turno));

		if($rodadas->count()==0){
			return $ordem->first();
		}
		else{
			$lastPlayer = $rodadas->sortByDesc('id')->first()->jogador_id;
			$players = $ordem->count();
			$key = $ordem->flip()[$lastPlayer];
			$key++;
			if($key >= $players){
				$key = 0;
			}
			return $ordem[$key];
		}

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