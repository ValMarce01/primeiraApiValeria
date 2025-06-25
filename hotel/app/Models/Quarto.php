<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quarto extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'tipo',
        'descricao',
        'preco',
        'status', // disponível, ocupado, manutenção, etc.
    ];

    // Relacionamento: Um Quarto tem muitas Reservas
    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}
