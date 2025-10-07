<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class movimientosController extends Controller
{
    public function index()
    {
        return view('empleado.movimientos');
    }
}
