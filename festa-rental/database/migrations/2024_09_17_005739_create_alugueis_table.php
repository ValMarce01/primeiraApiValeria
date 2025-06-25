<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('aluguels', function (Blueprint $table) {
        $table->id();
        $table->foreignId('equipamento_id')->constrained('equipamentos')->onDelete('cascade');
        $table->date('data_inicio');
        $table->date('data_fim');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aluguels');
    }
};
