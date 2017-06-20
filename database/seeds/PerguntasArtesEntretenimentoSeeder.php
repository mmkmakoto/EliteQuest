<?php

use Illuminate\Database\Seeder;
use App\Models\Tema;
use App\Models\Pergunta;
use App\Models\Resposta;
use App\Models\Dificuldade;

class PerguntasArtesEntretenimentoSeeder extends Seeder
{

    public function run()
    {

    	$facil_id = Dificuldade::where('nome','fácil')->first()->id;
		$medio_id = Dificuldade::where('nome','médio')->first()->id;
		$dificil_id = Dificuldade::where('nome','difícil')->first()->id;

		$artes_entretenimento_id = Tema::where('nome','Artes e Entretenimento')->first()->id;

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual era o verdadeiro nome de Elvis Presley?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'Elvis Aaron Presley',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Elvis Aron Presley',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Elvis Geron Presley',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Elvis de Presley',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Como se chamava a mansão de Michael Jackson?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'Graceland',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Neverland',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Maryland',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Jacksonland',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual o nome da música que Michael Jackson gravou no Pelourinho em Salvador?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'Billie Jean',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'We are the world',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'They Dont Care About Us',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Bad',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Quem interpreta a personagem Bella Swan na série Crepúsculo?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'Kristen Bell',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Kristen Stewart',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Kristin Scott Thomas',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Kristin Wiig',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Quem escreveu os livros da saga Crepúsculo?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'Stephenie Meyer',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Stephenie Swan',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Stephenie Pattinson',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Stephenie Stewart',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Em que ano Steven Spielberg ganhou o Oscar por "A Lista de Schindler?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => '1982',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '1992',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '1994',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '1998',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual filme de Steven Spielberg teve a maior arrecadação nas bilheterias?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $dificil_id,
		]);

		Resposta::create([
		'resposta' => 'Tubarão',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'E.T.',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'A Lista de Schindler',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'O Resgate do Soldado Ryan',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é o nome do personagem principal do filme Laranja Mecânica?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
		'resposta' => 'Alex',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'David',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Jack',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Pile',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'O que Quentin Tarantino fazia antes de se dedicar totalmente ao cinema?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
		'resposta' => 'Era gerente em uma lanchonete',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Era lanterninha em um cinema',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Dava aulas de atuação',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Trabalhava em uma videolocadora',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é o nome do personagem de John Travolta em Pulp Fiction?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'Vincent Vega',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Marsellus Wallace',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Butch Coolidge',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Jules Winnfield',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é o verdadeiro nome da noiva em "Kill Bill"?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'Uma Thurman',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Elle Driver',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Vernita Green',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Beatrix Kiddo',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Que atriz faz o papel de Nossa Senhora no filme "Auto da Compadecida"?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'Fernanda Montenegro',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Virgínia Cavendish',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Denise Fraga',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Glória Pires',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é o bordão de Chicó em "O auto da Compadecida?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'Diacho de vida aperreada!',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Êta mundo cão!',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Não sei, só sei que foi assim!',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Fica pobre, fica rico!',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Quantas temporadas teve a série "CSI Las Vegas"?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
		'resposta' => '15',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '14',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '5',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '10',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é o primeiro nome do doutor House na série de mesmo nome?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'Edmund',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'David',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Alan',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Gregory',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'A série How I Met Your Mother conta a vida de cinco amigos. Quem são eles?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'Ted, Marshall, Lily, Robin e Barney',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Barney, Betty, Fred, Wilma e Pedrita.',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Barney, Wilma, Ted, Marshall e Lilly',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Fez, Jack, Eric, Hide e Donna',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual era o nome da mãe em "How I meet your mother"?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
		'resposta' => 'Tracy',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Trecy',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Katy',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Nunca foi revelado',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual o nome do ator principal da série "Macgyver"?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
		'resposta' => 'Bruce McGill',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Richard Dean Anderson',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Ted Danson',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Sean Penn',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Quem é o arqui-inimigo de Sheldon em "The Big Bang Theory"?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
		'resposta' => 'Willian Shatner',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Ben Affleck',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Wil Wheaton',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Christian Bale',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'O que Sheldon, de The Big Bang Theory, diz quando faz uma piada?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'Bazinga!',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Brinks!',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Boya!',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Hippye!',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual termo criado significava o sucesso grandioso dos Beatles?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'Beatlemania',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Beatlefobia',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Beatlefans',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Beatleflowers',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual Beatle foi o primeiro a morrer?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'George Harrison',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Ringo Starr',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'John Lennon',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Paul MacCartney',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Quem foi o empresário dos Beatles?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
		'resposta' => 'Charlie',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Paul Epstein',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Brian Epstein',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Barry Epstein',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é a canção mais longa lançada pelo Guns and Roses?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
		'resposta' => 'November Rain',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Coma',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Welcome to the Jungle',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Civil War',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Onde a banda Legião Urbana foi formada?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'Brasília',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Minas Gerais',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'São Paulo',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Rio de Janeiro',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Em que data Renato Russo faleceu??',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => '10 de janeiro de 1996',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '10 de janeiro de 1997',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '11 de outubro de 1996',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '11 de outubro de 1997',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual músico era conhecido como "camaleão da musica" ?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'Roger Taylor',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Elton John',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'David Bowie',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Peter Gabriel',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Em qual cidade foi o último show do Queen com Freddie Mercury?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $dificil_id,
		]);

		Resposta::create([
		'resposta' => 'Stevenage',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Budapeste',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Brighton',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Barcelona',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual era o nome real de Freddie Mercury?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'Roger Daltrey',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Farrokh Bulsara',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Ferdinand Taylor',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Roger Meddows',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Em qual cidade o U2 foi formado?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
		'resposta' => 'Berlin',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Dublin',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Longford',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Londres',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Pride(In the name of love) foi feita para homenagear que figura histórica?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'Martin Luther King',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Gandhi',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'John F. Kennedy',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Malcom X',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Quem escreveu o livro "Dom Casmurro"?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'Euclides da Cunha',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Guimarães Rosa',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'José de Alencar',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Machado de Assis',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Quem foi o autor da "Divina Comédia"?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'Dante Alighieri',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Gil Vicente',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Camões',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Visconde de Taunay',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Quem escreveu "O Guarani"?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'Victor Hugo',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Machado de Assis',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'José de Alencar',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Dom Casmurro',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual foi o autor do primeiro romance sobre viagem no tempo através da ciência?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
		'resposta' => 'Isaac Asimov',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Julio Verne',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Arthur C. Clarke',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'H G Wells',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'A qual movimento pertence o livro "Macunaíma"?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
		'resposta' => 'Naturalismo',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Modernismo',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Realismo',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Parnasianismo',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual foi o segundo romance escrito por Clarice Linspector?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
		'resposta' => 'A paixão segundo G.H.',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'A cidade sitiada',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'O lustre',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'A legião estrangeira',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é a obra de Euclides da Cunha que retrata a guerra de Canudos na íntegra?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
		'resposta' => 'Canaã',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Guerra de Canudos',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Os Sertões',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Canudos: A Guerra Baiana',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Quem escreveu a obra Ulysses?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $dificil_id,
		]);

		Resposta::create([
		'resposta' => 'James Joyce',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Vladimir Nabokov',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Marcel Proust',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Richard Kipling',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é o nome do submarino do capitão Nemo?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $dificil_id,
		]);

		Resposta::create([
		'resposta' => 'Black Pearl',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Nina',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Nautilus',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Pinta',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'O conto "O Poço e o Pêndulo" foi escrito por qual autor?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $dificil_id,
		]);

		Resposta::create([
		'resposta' => 'Sir Arthur Conan Doyle',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Agatha Cristie',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Edgar Allan Poe',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Honoré de Balzac',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Quem é o centro das atenções no Romantismo?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'O clero e a nobreza',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Os santos da igreja',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'A burguesia',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'O próprio homem',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Em que ano foi realizada a "Semana de Arte Moderna" em São Paulo?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => '1922',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '1945',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '1992',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => '2000',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual é a pintura mais famosa de Leonardo da Vinci?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'A Última Ceia',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'O Homem Vitruviano',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Virgem das Rochas',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Mona Lisa',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Quem pintou o teto da Capela Sistina no Vaticano?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);

		Resposta::create([
		'resposta' => 'Donatello',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Raphael',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Leonardo',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Michelangelo',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Caravaggio foi um pintor italiano das cidades de Nápoles, Malta, Sicítia e?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
		'resposta' => 'Milão',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Roma',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Veneza',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Siena',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Quem pintou o quadro "Juízo Final"?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $medio_id,
		]);

		Resposta::create([
		'resposta' => 'Leonardo da Vinci',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Donatello',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Reembrandt',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Michelangelo',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		$pergunta = Pergunta::create([
		'pergunta' => 'Qual foi o pintor do quadro "Vocação de São Mateus"?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $dificil_id,
		]);

		Resposta::create([
		'resposta' => 'Caravaggio',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Michelangelo',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Aleijadinho',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Pablo Picasso',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual foi a principal técnica de pintura barroca?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Sombreamento',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Retrato',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Preto e Branco',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Caricatura',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Onde floresceu primeiramente o estilo barroco?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Austrália',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'China',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Japão',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Itália',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'Qual era o apelido do escultor, entalhador e pintor Antônio Francisco Lisboa?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'Aleijadinho',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Toninho',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Chiquinho',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Portuga',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'No final de qual século o Barroco chegou ao Brasil?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $facil_id,
		]);


		Resposta::create([
		'resposta' => 'XX',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'XVI',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'XXI',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'XVIII',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);


		$pergunta = Pergunta::create([
		'pergunta' => 'O Barroco foi introduzido no Brasil com qual poeta?',
		'tema_id' => $artes_entretenimento_id,
		'dificuldade_id' => $medio_id,
		]);


		Resposta::create([
		'resposta' => 'Gregório de Matos',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Jerônimo Baía',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Bento Teixeira',
		'correta' => true,
		'pergunta_id' => $pergunta->id,
		]);

		Resposta::create([
		'resposta' => 'Camões',
		'correta' => false,
		'pergunta_id' => $pergunta->id,
		]);

$pergunta = Pergunta::create([
            'pergunta' => 'Como se chama a filha do casal Ross e Rachel no seriado Friends?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Lily',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Ellie',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Emma',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Alice',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
		
$pergunta = Pergunta::create([
            'pergunta' => 'Qual o endereço que Dori estava procurando no filme Nemo?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'P Sherman, 42 - Wallaby Way, Sidney',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => '1600 Pennsylvania Ave NW, Washington',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => '901 Chapala St, Santa Barbara',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => '6831 Hollister Ave, Goleta',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

		
$pergunta = Pergunta::create([
            'pergunta' => 'Qual foi o primeiro personagem da “Turma da Mônica” criado pelo Maurício de Sousa?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Mônica',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Cascão',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Cebolinha',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Bidu',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
		
$pergunta = Pergunta::create([
            'pergunta' => 'Como é o nome das irmãs de Cinderela?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Anastácia e Drizela',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Lindinha, Florzinha e Docinho',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Merida e Tiana',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Elsa e Anna',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
		
$pergunta = Pergunta::create([
            'pergunta' => 'Com que frequência os Vulcanos precisam acasalar? (STAR TREK)',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $dificil_id,
        ]);

        Resposta::create([
            'resposta' => 'Todos os dias',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Uma vez a cada dois meses',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'A cada dois anos',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'A cada sete anos',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
		

$pergunta = Pergunta::create([
            'pergunta' => 'Leonardo DiCaprio ganhou o Oscar por qual de seus filmes?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Ele nunca ganhou um Oscar',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'O Regresso',
            'correta' => True,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'O Lobo de Wall Street',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'A Origem',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

		
$pergunta = Pergunta::create([
            'pergunta' => 'Qual dos seguintes não é um X-men?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Ciclope',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Wolverine',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Tocha Humana',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Tempestade',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
		
$pergunta = Pergunta::create([
            'pergunta' => 'No filme “Aladdin”, qual era o nome de seu macaco de estimação?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Rajah',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Pluto',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Milu',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Abu',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);

$pergunta = Pergunta::create([
            'pergunta' => 'O que Alf, o E.Teimoso queria comer?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'O gato',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'O cachorro',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'A torta',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'O sofá',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

		
$pergunta = Pergunta::create([
            'pergunta' => 'Quando foi lançada a série Star Trek?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => '1977',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => '1968',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => '1970',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => '1966',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);

		
$pergunta = Pergunta::create([
            'pergunta' => 'A cerveja Duff aparece em que desenho?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Os Simpsons',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Futurama',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'American Dad',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Uma Família da Pesada',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

$pergunta = Pergunta::create([
            'pergunta' => 'Qual o nome da indústria cinematográfica nigeriana?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Bollywood',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Nollywood',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Nigeriacorp',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Kinogeria',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

		
$pergunta = Pergunta::create([
            'pergunta' => 'Que personagem era conhecido por ser um aluno(a) sabe tudo em Harry Potter?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Harry',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Neville',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Daniel Sanchez, digo, Hermione',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Rony',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

$pergunta = Pergunta::create([
            'pergunta' => 'Qual o nome da cadela de “Vidas Secas”, do escritor alagoano Graciliano Ramos?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Baleia',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Orca',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Baronesa',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Condessa',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

		
$pergunta = Pergunta::create([
            'pergunta' => 'Quem pintou o quadro “Primavera”, também conhecido por “Alegoria da Primavera”?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Botticelli',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Ticiano',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Michelangelo',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Sleeper 1',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

		
$pergunta = Pergunta::create([
            'pergunta' => 'Quem escreveu Branca de Neve?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Antoine Galland',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Walt Disney',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Irmãos Grimm',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Charles Perrault',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
		
		
		$pergunta = Pergunta::create([
            'pergunta' => 'O que o soldadinho de chumbo perdeu?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $facil_id,
        ]);

        Resposta::create([
            'resposta' => 'Uma perna',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Um Braço',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Uma Mão',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Um dedo',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

		$pergunta = Pergunta::create([
            'pergunta' => 'Qual poeta escreveu o drama “Bodas de Sangue”?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Miguel de Cervantes',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Tirso de Molina',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Félix Lope de Vega',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Federico García Lorca',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);

		$pergunta = Pergunta::create([
            'pergunta' => 'A que escola literária pertencia Machado de Assis?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Romantismo',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Realismo',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Naturalismo',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Arcadismo',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

		
		$pergunta = Pergunta::create([
            'pergunta' => 'Qual é o livro mais editado e traduzido da história?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Dom Quixote',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'O pequeno Príncipe',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'A Bíblia',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Odisseia',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

		
		$pergunta = Pergunta::create([
            'pergunta' => 'Quem escreveu o livro “Diva”?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'José de Alencar',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Alvares de Azevedo',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Eduardo Spohr',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Machado de Assis',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
		
		$pergunta = Pergunta::create([
            'pergunta' => 'Quem escreveu os contos de Sherlock Holmes?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Oscar Wilde',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Edgar Allan Poe',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Agatha Christie',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Arthur Conan Doyle',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);

		$pergunta = Pergunta::create([
            'pergunta' => 'O Realismo faz oposição a que estilo literário?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Romantismo',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Naturalismo',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Modernismo',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Simbolismo',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);

		
		$pergunta = Pergunta::create([
            'pergunta' => 'Tarsila do Amaral pertence a qual movimento?',
            'tema_id' => $artes_entretenimento_id,
            'dificuldade_id' => $medio_id,
        ]);

        Resposta::create([
            'resposta' => 'Romantismo',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Modernismo',
            'correta' => true,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Realismo',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);
        Resposta::create([
            'resposta' => 'Pós-Modernismo',
            'correta' => false,
            'pergunta_id' => $pergunta->id,
        ]);


    }
}
