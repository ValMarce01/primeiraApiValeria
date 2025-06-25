<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();

            // Relacionamento com clientes
            $table->foreignId('cliente_id')
                ->constrained('clientes')
                ->onDelete('cascade');

            // Relacionamento com quartos
            $table->foreignId('quarto_id')
                ->constrained('quartos')
                ->onDelete('cascade');

            // Datas da reserva
            $table->date('data_inicio');
            $table->date('data_fim');

            // Status da reserva (ex: pendente, confirmada, cancelada)
            $table->string('status')->default('pendente');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
