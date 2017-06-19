<?php
use Illuminate\Database\Seeder;
use App\Models\Tema;

class TemaSeeder extends Seeder
{
    public function run()
    {
        // Tema::create([
        //     'nome' => 'Matemática',
        // ]);
        // Tema::create([
        //     'nome' => 'Português',
        // ]);
        // Tema::create([
        //     'nome' => 'Física',
        // ]);
        // Tema::create([
        //     'nome' => 'Geografia',
        // ]);
        // Tema::create([
        //     'nome' => 'História',
        // ]);
        // Tema::create([
        //     'nome' => 'Atualidades',
        // ]);
        Tema::create([
            'nome' => 'Sociedade',
        ]);
        Tema::create([
            'nome' => 'Esporte e Lazer',
        ]);
        Tema::create([
            'nome' => 'Artes e Entretenimento',
        ]);
        Tema::create([
            'nome' => 'Ciência e Tecnologia',
        ]);
        Tema::create([
            'nome' => 'Mundo',
        ]);
    }
}