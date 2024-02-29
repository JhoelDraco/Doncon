<?php

namespace App\Http\Controllers;
use App\Models\Caja;
use Illuminate\Http\Request;

class CajaController extends Controller
{
    //
     //funciones de las vistas
     public function index(){

        $cajas = Caja::all();
        return view("administrador.cajas.index", compact('cajas'));
    }


    public function activar(Caja $caja){

        $caja->update([
            'estado' => true,
        ]);

        return redirect()->route('caja.index');
    }

    public function desactivar(Caja $caja){
        
        $caja->update([
            'estado' => false,
            'num_caja_dia' => 0,
        ]);

        return redirect()->route('caja.index');
    }

    public function almacenar(){
        
        Caja::create([
            'estado' => false,
            'num_caja_dia' => 0,
        ]);
        return redirect()->route('caja.index');
    }

    public function eliminar(Caja $caja){
        $caja->delete();

        return redirect()->route('caja.index');
    }
}
