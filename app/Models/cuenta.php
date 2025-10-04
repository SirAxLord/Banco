<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cuenta extends Model
{
    protected $table = 'cuentas';

    protected $fillable = [
        'tipo', 'saldo', 'cliente_id'
    ];
}
