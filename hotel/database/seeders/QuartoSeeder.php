<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quarto;

class QuartoSeeder extends Seeder
{
    public function run(): void
    {
        $quartos = [
            [
                'nome' => 'Quarto Standard',
                'descricao' => 'Quarto simples com cama de casal, TV e Wi-Fi.',
                'capacidade' => 2,
            ],
            [
                'nome' => 'Suíte Executiva',
                'descricao' => 'Suíte com hidromassagem, ar-condicionado e vista para o mar.',
                'capacidade' => 3,
            ],
            [
                'nome' => 'Quarto Familiar',
                'descricao' => 'Amplo espaço com 2 camas de solteiro e uma de casal.',
                'capacidade' => 4,
            ],
        ];

        foreach ($quartos as $quarto) {
            Quarto::create($quarto);
        }
    }
}
