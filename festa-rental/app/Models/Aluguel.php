<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluguel extends Model
{
    protected $fillable = ['equipamento_id', 'data_inicio', 'data_fim', 'user_id'];

    protected $casts = [
        'data_inicio' => 'date',
        'data_fim' => 'date',
    ];

    public function equipamento()
    {
        return $this->belongsTo(Equipamento::class);
    }
}