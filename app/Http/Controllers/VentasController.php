<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas;
use App\Models\Cliente;

class VentasController extends Controller
{
    public function crear(Cliente $cliente){

        return view("administrador.ventas.crear", compact('cliente'));
    }
}
