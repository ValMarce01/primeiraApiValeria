<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    protected $fillable = ['nome', 'tamanho', 'valor_diaria'];

    public function alugueis()
    {
        return $this->hasMany(Aluguel::class);
    }
}