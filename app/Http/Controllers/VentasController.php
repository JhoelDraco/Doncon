<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas;
use App\Models\Cliente;
use App\Models\Empresa;
use App\Models\Persona;

class VentasController extends Controller
{
    public function crear(Cliente $cliente){
        $cliente = Cliente::select('clientes.*', 'empresas.*', 'personas.*', 'clientes.id as cliente_id', 'personas.nombre1')
        ->leftJoin('empresas', 'clientes.id', '=', 'empresas.id_clientes')
        ->leftJoin('personas', 'clientes.id', '=', 'personas.id_clientes')
        ->whereNotNull('empresas.id')
        ->orWhereNotNull('personas.id')
        ->where('clientes.id',$cliente->id)
        ->first();
    
    $data = [
        'cliente' => $cliente
    ];
        return view("administrador.ventas.crear", compact('cliente'));
    }
}
