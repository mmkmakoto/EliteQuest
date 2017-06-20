<?php

use Illuminate\Database\Seeder;
use App\Models\Tema;
use App\Models\Pergunta;
use App\Models\Resposta;
use App\Models\Dificuldade;

class PerguntasEsporteLazerSeeder extends Seeder
{
    public function run()
    {
    	$facil_id = Dificuldade::where('nome','fácil')->first()->id;
		$medio_id = Dificuldade::where('nome','médio')->first()->id;
		$dificil_id = Dificuldade::where('nome','difícil')->first()->id;

		$esporte_lazer_id = Tema::where('nome','Esporte e Lazer')->first()->id;

		$pergunta = Pergunta::create([
			'pergunta' => 'Qual é o esporte mais popular no Brasil?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
			'resposta' => 'Voleibol',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Futebol de Salão',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Basquete',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Futebol',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Qual é o esporte praticado sobre uma mesa com rede, uma bola e raquetes?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
			'resposta' => 'Pingue-Pongue',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Tênis',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Bilhar',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Truco',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Qual dessas não é uma modalidade esportiva?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
			'resposta' => 'Beisebol',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Arco e flecha',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Loteria',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Salto com vara',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Quantos jogadores formam um time de Futebol?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
			'resposta' => '11',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '10',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '6',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '5',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Quais são as medidas de uma quadra de Vôlei?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
			'resposta' => '50 x 25 metros',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '20 x 10 metros',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '18 x 9 metros',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '15 x 5 metros',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Quais são os fundamentos do Volei?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
			'resposta' => 'Saque, manchete e recepção',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Levantamento, cortada e arremesso',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Saque, levantamento e recepção',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Saque, ace e levantamento',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Quantos períodos tem um jogo de basquete?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
			'resposta' => '4 períodos',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '2 períodos',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '6 períodos',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '1 período',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Quantos turnos tem um jogo de Beisebol?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $dificil_id,
		]);

		Resposta::create([
			'resposta' => '4 turnos',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '18 turnos',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '2 turnos',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '9 turnos',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Como é chamado o jogador que pega as bolas longas que são rebatidas no beisebol?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
			'resposta' => 'Jardineiro',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Carpinteiro',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Defensor',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Rebatedor',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'No futebol americano, quantas chances uma equipe tem para avançar 10 jardas?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $dificil_id,
		]);

		Resposta::create([
			'resposta' => 'até perder a bola',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '5 chances',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '4 chances',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '2 chances',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Qual é o nome da punição mínima em uma luta de judô?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $dificil_id,
		]);

		Resposta::create([
			'resposta' => 'Ippon',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Mate',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Yuko',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Koka',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Qual é o primeiro nome de Pelé?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
			'resposta' => 'Augusto',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'José',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Edson',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Pedro',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Em que ano morreu Ayrton Senna?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
			'resposta' => '1994',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '1990',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '1993',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '1989',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Quem foi o técnico da seleção brasileira na Copa do Mundo de 2014?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
			'resposta' => 'Mano Menezes',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Tite',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Carlos Alberto Parreira',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Luiz Felipe Scolari',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Qual é o skatista brasileiro com mais vitórias em campeonatos internacionais?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
			'resposta' => 'Sandro Dias',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Tony Hawk',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Bob Burnquist',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Pedro Barros',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Contra qual lutador Anderson Silva unificou os títulos do UFC e do Pride?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
			'resposta' => 'Dana White',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Vitor Belfort',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Dan Henderson',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Demian Maia',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Em que ano Gustavo Kuerten ganhou o torneio de Roland Garros pela primeira vez?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
			'resposta' => '2000',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '2001',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '1997',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '1999',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Onde e quando nasceu o tenista Roger Federer?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $dificil_id,
		]);

		Resposta::create([
			'resposta' => 'Genebra, 19 de julho de 1980',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Wollerau, 8 de agosto de 1981',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Basiléia, 8 de agosto de 1981',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Basel, 19 de julho de 1980',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Quem é o jogador com mais gols em Copas do Mundo?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $dificil_id,
		]);

		Resposta::create([
			'resposta' => 'Bastian Schweinsteiger',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'André Schürrle',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Thomas Müller',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Miroslav Klose',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Por quais equipes Michael Schumacher foi campeão de Fórmula 1?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
			'resposta' => 'Jordan e Benetton',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Jordan e Mercedes',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Ferrari e Jordan',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Benetton e Ferrari',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Em qual equipe Rubens Barrichello estreou na Fórmula 1?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $dificil_id,
		]);

		Resposta::create([
			'resposta' => 'Ferrari',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Jordan',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'BrownGP',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Stewart',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Qual desses times nunca foi campeão da Copa Libertadores?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
			'resposta' => 'Fluminense',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Atlético Mineiro',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Palmeiras',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Santos',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Qual foi o time campeão do campeonato Brasileiro de 2016?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
			'resposta' => 'Corinthians',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Atlético Mineiro',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Palmeiras',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Flamengo',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Qual seleção ganhou a Copa do Mundo de 2014?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
			'resposta' => 'Brasil',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Argentina',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Holanda',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		 Resposta::create([
			'resposta' => 'Alemanha',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
   		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Qual arena abriu a Copa do Mundo de 2014?',
			'tema_id' => $esporte_lazer_id,
			'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
			'resposta' => 'Arena Barueri',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Arena do Jacaré',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Arena Corinthians',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Mineirão',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Qual jogador alemão fez o gol do título da Copa do Mundo de 2014?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
			'resposta' => 'Manuel Neuer',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Miroslav Klose',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Phillip Lahm',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Mario Götze',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Qual o total de medalhas do Brasil nas Olimpíadas de 2016?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
			'resposta' => '50',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '19',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '35',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '40',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Onde foi disputada a final da UEFA Champions League de 2017?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
			'resposta' => 'Cardiff, País de Gales',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Wembley, Londres',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Berlim, Alemanha',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Milão, Itália',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Quando foi realizada a primeira Olimpíada?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
			'resposta' => '1900 d.C.',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '393 a.C.',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '776 a.C.',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '500 d.C.',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Quantas medalhas Jesse Owens ganhou na Olimpíada de Berlim em 1936?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
			'resposta' => '4 medalhas',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '5 medalhas',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '3 medalhas',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => '6 medalhas',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Qual foi o primeiro jogador a ser número 1 do mundo pela ATP(Associação de Tenistas Profissionais)?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
			'resposta' => 'John Newcombe',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Jimmy Connors',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Bjorn Borg',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'Ilie Nastase',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
			'pergunta' => 'Como é o nome do colecionador de selos?',
			'tema_id' =>$esporte_lazer_id,
			'dificuldade_id' => $dificil_id,
		]);

		Resposta::create([
			'resposta' => 'filatelista',
			'correta' => true,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'numismático',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'filantropista',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
			'resposta' => 'filólogo',
			'correta' => false,
			'pergunta_id' => $pergunta->id,
		]);




$pergunta = Pergunta::create([
            'pergunta' => 'Futebol: Quem venceu a Champions League de 2008?',
            'tema_id' => $esporte_lazer_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Real Madrid',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Manchester United',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Chelsea',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Barcelona',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);


$pergunta = Pergunta::create([
            'pergunta' => 'Futebol: Qual seleção foi a campeã mundial de 2006?
',
            'tema_id' => $esporte_lazer_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Alemanha',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'França',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Itália',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Brasil',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

$pergunta = Pergunta::create([
            'pergunta' => 'Basquete: Qual time foi campeão da NBA 2011?',
            'tema_id' => $esporte_lazer_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Miami Heat',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Boston Celtics',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Dallas Mavericks',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Cleveland Cavaliers',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

$pergunta = Pergunta::create([
            'pergunta' => 'Tênis: Qual o maior vencedor de Grand Slam em simples da história?',
            'tema_id' => $esporte_lazer_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Bjorn Borg',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Roger Federer',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Rafael Nadal',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Novak Djokovic',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

$pergunta = Pergunta::create([
            'pergunta' => 'Tênis: Quem venceu o Australian Open de 2014?',
            'tema_id' => $esporte_lazer_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Stanislas Wawrinka',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Rafael Nadal',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Novak Djokovic',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Roger Federer',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

$pergunta = Pergunta::create([
            'pergunta' => 'Golfe: Qual o nome do americano que é considerado o maior golfista de todos os tempos?',
            'tema_id' => $esporte_lazer_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Tiger Woods',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Arnold Palmer',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Jack Nicklaus',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Ben Hogan',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

$pergunta = Pergunta::create([
            'pergunta' => 'Natação: Qual o nadador americano recordista de medalhas de ouro nas Olimpíadas?',
            'tema_id' => $esporte_lazer_id,
            'dificuldade_id' => $facil_id,
        ]);

        Resposta::create([
            'resposta' => 'Gunnar Bentz',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Jimmy Feigen',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Michael Phelps',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Ryan Lochte',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

$pergunta = Pergunta::create([
            'pergunta' => 'Futebol: Quem venceu o Mundial de Clubes de 2005?',
            'tema_id' => $esporte_lazer_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Liverpool',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Santos',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'São Paulo',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Real Madrid',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

$pergunta = Pergunta::create([
            'pergunta' => 'Futebol: Qual foi a seleção adversária da Argentina nas oitavas de final da Copa do Mundo de 2014?',
            'tema_id' => $esporte_lazer_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Brasil',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Suiça',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Chile',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Grécia',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

$pergunta = Pergunta::create([
            'pergunta' => 'Volêi: Qual seleção venceu o Campeonato Mundial de Volêi Masculino de 2014?',
            'tema_id' => $esporte_lazer_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Brasil',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Alemanha',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Polônia',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Rússia',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

$pergunta = Pergunta::create([
            'pergunta' => 'Olimpíadas de Inverno: Qual cidade e país a sediou em 2014?',
            'tema_id' => $esporte_lazer_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Londres, Inglaterra',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Berna, Suiça',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Sochi, Rússia',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Vancouver, Canadá',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);


$pergunta = Pergunta::create([
            'pergunta' => 'Tênis: Quem venceu o Masters 1000 de Xangai 2014?',
            'tema_id' => $esporte_lazer_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Novak Djokovic',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Juan Martín Del Potro',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Rafael Nadal',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Roger Federer',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);

$pergunta = Pergunta::create([
            'pergunta' => 'Futebol: Quem venceu o Mundial de Clubes de 2012?',
            'tema_id' => $esporte_lazer_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Barcelona',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Real Madrid',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Corinthians',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Bayern de Munique',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

$pergunta = Pergunta::create([
            'pergunta' => 'Basquete: Quem venceu o Campeonato Mundial Interclubes de Basquete de 2014?',
            'tema_id' => $esporte_lazer_id,
            'dificuldade_id' => $dificil_id,
        ]);

        Resposta::create([
            'resposta' => 'Real Madrid',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Flamengo',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Pinheiros',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Barcelona',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

$pergunta = Pergunta::create([
            'pergunta' => 'Futebol: Quem venceu a Copa do Mundo de 1950?',
            'tema_id' => $esporte_lazer_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Alemanha',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Itália',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Uruguai',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => '',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

$pergunta = Pergunta::create([
            'pergunta' => 'Olimpíadas: Qual cidade e país foi sede do torneio em 2016?',
            'tema_id' => $esporte_lazer_id,
            'dificuldade_id' => $facil_id,
        ]);

        Resposta::create([
            'resposta' => 'Buenos Aires, Argentina',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Nova Iorque, EUA',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Berlim, Alemanha',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Rio de Janeiro, Brasil',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);




	}
}
