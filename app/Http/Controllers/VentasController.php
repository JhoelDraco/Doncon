<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas;

class VentasController extends Controller
{
    public function crear(){
        return view("administrador.ventas.crear");
    }
}
