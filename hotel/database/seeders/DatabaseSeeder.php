<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Cria um usuário administrador
        User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@example.com',
        ]);

        // Executa os outros seeders em ordem
        $this->call([
            ClienteSeeder::class,
            QuartoSeeder::class,
            ReservaSeeder::class,
        ]);
    }
}
