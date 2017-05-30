<?php
use Illuminate\Database\Seeder;
use App\Models\Tema;

class TemaSeeder extends Seeder
{
    public function run()
    {
        Tema::create([
            'nome' => 'Matemática',
        ]);
        Tema::create([
            'nome' => 'Português',
        ]);
        Tema::create([
            'nome' => 'Física',
        ]);
        Tema::create([
            'nome' => 'Geografia',
        ]);
        Tema::create([
            'nome' => 'História',
        ]);
        Tema::create([
            'nome' => 'Atualidades',
        ]);
    }
}