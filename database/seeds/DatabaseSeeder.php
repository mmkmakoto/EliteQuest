<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$this->call(UsersJogadoresSeeder::class);
        $this->call(TemaSeeder::class);
		$this->call(DificuldadeSeeder::class);
        $this->call(PerguntasRespostasSeeder::class);
        $this->call(PartidaSeeder::class);
		$this->call(RodadasSeeder::class);
    }
}
