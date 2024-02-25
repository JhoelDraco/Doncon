<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;


class InicioController extends Controller
{
    public function inicio() {
        return view("Clientes.inicio");
    }

    public function nosotros() {
        return view("Clientes.nosotros");
    }

    public function servicios() {
        return view("Clientes.servicios");
    }

    public function articulos() {
        return view("Clientes.articulos");
    
    }
    public function artiordenadores() {
        $productos=Producto::all();
        return view("Clientes.artiordenadores",compact('productos'));
    
    }
}
