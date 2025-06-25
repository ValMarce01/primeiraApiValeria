<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reserva;
use App\Models\Cliente;
use App\Models\Quarto;

class ReservaSeeder extends Seeder
{
    public function run(): void
    {
        $clientes = Cliente::take(3)->get();
        $quartos = Quarto::take(3)->get();

        if ($clientes->count() < 3 || $quartos->count() < 3) {
            $this->command->warn('⚠️ É necessário pelo menos 3 clientes e 3 quartos cadastrados para criar reservas.');
            return;
        }

        $reservas = [
            [
                'cliente_id' => $clientes[0]->id,
                'quarto_id' => $quartos[0]->id,
                'data_inicio' => '2025-06-10',
                'data_fim' => '2025-06-15',
                'status' => 'confirmada',
            ],
            [
                'cliente_id' => $clientes[1]->id,
                'quarto_id' => $quartos[1]->id,
                'data_inicio' => '2025-07-01',
                'data_fim' => '2025-07-05',
                'status' => 'pendente',
            ],
            [
                'cliente_id' => $clientes[2]->id,
                'quarto_id' => $quartos[2]->id,
                'data_inicio' => '2025-06-20',
                'data_fim' => '2025-06-22',
                'status' => 'cancelada',
            ],
        ];

        foreach ($reservas as $reserva) {
            Reserva::create($reserva);
        }
    }
}

