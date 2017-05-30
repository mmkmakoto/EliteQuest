<?php
use App\Models\Dificuldade;
use Illuminate\Database\Seeder;

class DificuldadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Dificuldade::create([
    		'nome' => 'fácil',
    	]);
    	Dificuldade::create([
    		'nome' => 'médio',
    	]);
    	Dificuldade::create([
    		'nome' => 'difícil',
    	]);
    }
}
