<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pago extends Model
{
    protected $table = 'pagos';

    protected $fillable = [
        'monto', 'fecha', 'cliente_id', 'descripcion'
    ];
}
