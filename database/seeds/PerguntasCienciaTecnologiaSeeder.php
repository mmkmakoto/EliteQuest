<?php
use Illuminate\Database\Seeder;
use App\Models\Tema;
use App\Models\Pergunta;
use App\Models\Resposta;
use App\Models\Dificuldade;
class PerguntasCienciaTecnologiaSeeder extends Seeder
{

    public function run()
    {
    	$facil_id = Dificuldade::where('nome','fácil')->first()->id;
		$medio_id = Dificuldade::where('nome','médio')->first()->id;
		$dificil_id = Dificuldade::where('nome','difícil')->first()->id;

		$ciencia_tecnologia_id = Tema::where('nome','Ciência e Tecnologia')->first()->id;

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual parte da física estuda a energia térmica?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Termologia',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Mecânica',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Magnetismo',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Eletricidade',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Que instrumento é utilizado para medir a temperatura corporal?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Termômetro',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Multímetro',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Calorímetro',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Celsímetro',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual escala termométrica também é conhecida como escala absoluta?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Escala Celsius',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Escala Fahrenheit',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Escala Kelvin',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Escala Réaumur',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual famoso cientista disse: "Dê-me uma alavanca e moverei o mundo?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Albert Einstein',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Arquimedes',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Robert Hooke',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Johans Kepler',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'A unidade de medida Ano-Luz mede o quê?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Volume',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Tempo',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Luminosidade',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Distância',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'O que determina a cor de um corpo?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'A frequência de luz que um corpo reflete',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'A frequência de luz que um corpo recebe',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'A velocidade em que o corpo se encontra',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'A tinta que um corpo é pintado',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual fenômeno explica a emissão irregular de ondas por corpos em movimento em relação ao observador?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Teoria da relatividade',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Efeito Joule',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Efeito Doppler',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Lei de Coloumb',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Como a luz se propaga?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Somente no ar',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Em linha reta',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Em linha curva',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Em um só sentido',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Quais das transformações são referentes a um gás que recebe calor e fornece trabalho?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Isobárica e isotérmica',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Adiabática e isobárica',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Isotérmica e adiabática',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Isométrica e isotérmica',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'A quantos graus na escala Fahrenheit correspondem 50 C?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $dificil_id,
		]);


		Resposta::create([
		'resposta' => '122 F',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '100 F',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '25 F',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '50 F',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é a potência de um motor que realiza um trabalho de 1200 J em dois minutos?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $dificil_id,
		]);


		Resposta::create([
		'resposta' => '2W',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '2400W',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '1200W',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '600W',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'O que mede um Esfigmomanômetro?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $dificil_id,
		]);


		Resposta::create([
		'resposta' => 'Evaporação de líquidos',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Intensidade de Luz',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Pressão arterial',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Diâmetro dos astros',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'O que é matéria?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Aquilo que é ensinado na escola',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'É o átomo',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Tudo que constitui a vida de uma pessoa',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'É tudo que tem massa e ocupa lugar no espaço',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é o elemento mais abundante no planeta Terra?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Oxigênio',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Carbono',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'O ser humano',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Rochas',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'O que é um átomo?',
		'tema_id' => $ciencia_tecnologia_id,
				'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'são pequenas partículas que formam a matéria',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'são os elementos da tabela periódica',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'elétrons',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'cátions',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é o estado do mercúrio em temperatura ambiente?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Líquido',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Sólido',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Gasoso',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Plasma',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual composto abaixo não conduz corrente elétrica?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Fe(sólido)',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'KCl(aquoso)',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'H2O4(aquoso)',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'NH4Cl(sólido)',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'O composto CaO é classificado como?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Ácido',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Base',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Sal',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Óxido',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Um gás possui a pressão de 800 mmhg fazendo as transformações, quanto seria a pressão em atm?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $dificil_id,
		]);


		Resposta::create([
		'resposta' => '1,05 atm',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '8 atm',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '80 atm',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '10,5 atm',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'O buteno possui?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $dificil_id,
		]);


		Resposta::create([
		'resposta' => 'Ponto de ebulição muito alto',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Três ligações pi',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Fórmula C4H6',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Isometria geométrica',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'O termômetro subiu 6 graus, o que representa metade da temperatura de antes, qua a temperatura agora?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => '9 graus',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '16 graus',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '18 graus',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '12 graus',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'S eu tivesse dois patos a mais, o dobro desse total seria 100. Quantos patos tenho agora?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => '50 patos',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '80 patos',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '48 patos',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '98 patos',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Quanto é 1/3 de 603?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => '303',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '201',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '103',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '203',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Quanto é 3x + 100 = 2x + 100 + 200?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => '200',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '99',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '320',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '100',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é o ponto de encontro das bissetrizes de um triângulo?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Incentro',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Baricentro',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Circuncentro',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Ortocentro',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual o nome do polígono que tem as medidas dos ângulos internos e externos congruentes?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Quadrilátero',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Triângulo',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Dodecágono',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Decágono',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual a função da primeira fórmula de Moivre?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $dificil_id,
		]);


		Resposta::create([
		'resposta' => 'Subtração de números complexos',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Soma de números complexos',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Radiciação de números complexos',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Potenciação de números complexos',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é a derivada da função constante 3^3?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => '9',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '0',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '27',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '3',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Quantas estrelas tem a constelação do Cruzeiro do Sul?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => '4 estrelas',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '5 estrelas',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '12 estrelas',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '8 estrelas',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Quais são os principais componentes do sol?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Hidrogênio e Hélio',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Oxigênio e Hélio',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Hélio e Carbono',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Fósforo e Hélio',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é o planeta do Sistema olar que é composto por 75% de água?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Urano',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Acquaria',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Netuno',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Terra',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é o planeta mais quente do Sistema Solar?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Vênus',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Mercúrio',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Marte',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Júpiter',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é o último planeta do Sistema Solar?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Vênus',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Saturno',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Marte',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Netuno',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Quem descobriu o planeta Saturno?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $dificil_id,
		]);


		Resposta::create([
		'resposta' => 'Willian Herschel',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Christian Huygens',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Pierre Gassendi',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Buzz Aldrin',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é o nome da lua de Plutão?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $dificil_id,
		]);


		Resposta::create([
		'resposta' => 'Caronte',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Ceres',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Galatéia',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Eris',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Quantos planetas do Sistema Solar não possuem luas?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => '2',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '3',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '4',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '0',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'A meningite é causada por quais seres vivos?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Bactérias e metaphytas',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Fungos e protozoários',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Vírus e arqueas',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Bactérias e vírus',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Quem produz o leite?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Apenas as vacas',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Os animais vertebrados',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'As fêmeas mamíferas',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'As fêmeas',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Quais os tipos de ordenha?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Manual e mecânica',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Manual',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Suspenção',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Sucção',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'O que pinguins e araras têm em comum?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Ambos fazem ninhos',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Os dois não botam ovos',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'O macho cuida do filhote',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Acasalam com o mesmo parceiro a vida toda',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Lampyris noctiluca é o nome científico de qual espécie?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Vaga-lume',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Abelhas',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Escorpião',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Morcego',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é o nome do protozoário causador da doença de Chagas?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Trypanossoma Cruz',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Flagelado Cruzi',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Trypanossoma Cruzi',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Flagelado Cruz',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Quantos anos normalmente uma jibóia vive?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $dificil_id,
		]);


		Resposta::create([
		'resposta' => '23 anos',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '25 anos',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '20 anos',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '19 anos',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Por que os crocodilianos conseguem permanecer de olhos abertos embaixo da água?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $dificil_id,
		]);


		Resposta::create([
		'resposta' => 'Por causa da membrana lacrimal',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Por causa da membrana nictitante',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Eles não permanecem de olhos abertos',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Pelo fato de não possuírem pálpebras',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Um cartão de memória serve para:',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Armazenar fotos',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Armazenar arquivos',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Não esquecer de compromissos',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Armazenar músicas',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Como se chamam as mensagens de texto trocadas por celular?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'SMS',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'MMS',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'TXT',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'PPT',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Pra que serve a tecnologia Bluetooth?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Armazenar fotos e documentos',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Trocar informações entre equipamentos diferentes sem usar cabo',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Carregar a bateira do celular sem usar cabo',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'É um tratamento dentário inovador',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'A evolução dos computadores se baseia em que?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Processamento e armazenamento',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Procesamento e facilidade de uso',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Interatividade e rapidez',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Realidade virtual e hologramas',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'São exemplos de hardware, somente:',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Impressora, Corel Draw e monitor',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Impressora, monitor e disco rígido',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Processador, Windows e teclado',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Windows, Linux e Dos',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qal foi o primeiro computador da Apple?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Apple II',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Macintosh',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Macbook',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Mac PC',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Em que ano a Microsoft foi fundada?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => '1975',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '1985',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '1995',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '1965',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Quando foi lançado o Xbox?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Em dezembro de 2001',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Em Dezembro de 2000',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Em Novembro de 2000',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Em Novembro de 2001',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Em quantas camadas se divide o modelo OSI(Open System Interconnection)?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => '10',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '8',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '7',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '6',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Como se classificam as fibras ópticas?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Nodal e modal',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Monofibra e multifibra',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Monomodo e multimodo',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Fina e grossa',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é a tríplice restrição de um projeto?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'tempo, ciclo de vida e efetividade',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'pessoas, meios e tecnologia',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'escopo, custo e tempo',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'escopo, tecnologia e pessoal',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual protocolo é responsável pelo controle dinâmico de IPs?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'DNS',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'IP',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'DHCP',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'SNMP',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Quantos grupos de processos existem na 5 edição do PMBOK?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => '26',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '10',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '46',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '47',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'O que é o ITIL?',
		'tema_id' => $ciencia_tecnologia_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Inteligence Technology Information Library',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Infrastructure Technology Information Library',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Information Technology Infrastructure Library',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Information Technology Infrastructure License',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);





    }
}
