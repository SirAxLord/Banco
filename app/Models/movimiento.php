<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class movimiento extends Model
{
    protected $table = 'movimientos';

    protected $fillable = [
        'tipo', 'monto', 'cuenta_id', 'descripcion'
    ];
}
