<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'quarto_id',
        'nome_cliente',
        'email_cliente',
        'data_checkin',
        'data_checkout',
        'status', // exemplo de status: pendente, confirmada, cancelada
    ];

    /**
     * A reserva pertence a um quarto.
     */
    public function quarto()
    {
        return $this->belongsTo(Quarto::class);
    }
}
