<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;

use Illuminate\Http\Request;

class FuncionesClienteController extends Controller
{
    /*
    * Retornar si el cliente es una persona o empresa
    */
    public function informacionCliente($cliente_id){

        $cliente = Cliente::select('clientes.*', 'empresas.*', 'personas.*', 'clientes.id as cliente_id')
        ->leftJoin('empresas', 'clientes.id', '=', 'empresas.id_clientes')
        ->leftJoin('personas', 'clientes.id', '=', 'personas.id_clientes')
        ->whereNotNull('empresas.id')
        ->orWhereNotNull('personas.id')
        ->where('clientes.id', $cliente_id)
        ->first();

        return $cliente;
    }
}
