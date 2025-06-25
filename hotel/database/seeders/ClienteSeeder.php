<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    public function run(): void
    {
        $clientes = [
            [
                'nome' => 'Maria da Silva',
                'email' => 'maria@example.com',
                'telefone' => '11988887777',
                'documento' => '123.456.789-00',
            ],
            [
                'nome' => 'João Pereira',
                'email' => 'joao@example.com',
                'telefone' => '11999998888',
                'documento' => '987.654.321-00',
            ],
            [
                'nome' => 'Ana Costa',
                'email' => 'ana@example.com',
                'telefone' => '11987776655',
                'documento' => '456.789.123-00',
            ],
        ];

        foreach ($clientes as $cliente) {
            Cliente::create($cliente);
        }

        // Removido o trecho da factory por segurança, caso não exista
    }
}

