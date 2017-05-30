<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Jogador;
class UsersJogadoresSeeder extends Seeder
{
	public function run()
	{
        $user = User::create([
            'name' => 'jogador 1',
            'email' => 'jogador1@quest.com',
            'password' => bcrypt('elitequest'),
        ]);
        Jogador::create([
        	'tipo' => 'normal',
        	'user_id' => $user->id,
        ]);

        $user = User::create([
            'name' => 'jogador 2',
            'email' => 'jogador2@quest.com',
            'password' => bcrypt('elitequest'),
        ]);
        Jogador::create([
        	'tipo' => 'normal',
        	'user_id' => $user->id,
        ]);

        $user = User::create([
            'name' => 'jogador 3',
            'email' => 'jogador3@quest.com',
            'password' => bcrypt('elitequest'),
        ]);
        Jogador::create([
        	'tipo' => 'normal',
        	'user_id' => $user->id,
        ]);

        $user = User::create([
            'name' => 'jogador 4',
            'email' => 'jogador4@quest.com',
            'password' => bcrypt('elitequest'),
        ]);
        Jogador::create([
        	'tipo' => 'normal',
        	'user_id' => $user->id,
        ]);
	}
}
