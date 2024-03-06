<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\FuncionesVentaController;
use App\Models\Caja;
use App\Models\CajaDia;
use Illuminate\Support\Facades\DB;
use App\Models\Venta;
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
        $funcionesVenta = new FuncionesVentaController();

        $cajaDia = $funcionesVenta->cajaDiaUsuario();

        $ultima_venta = Venta::where('id_cajadia', $cajaDia->id)
                ->latest()
                ->first();

        $ventas_suma = DB::table('ventas')
        ->whereBetween('fecha_hora', [$cajaDia->fecha_hora, $ultima_venta->fecha_hora])
        ->sum('total');

        $caja_dia = CajaDia::findOrFail($cajaDia->id);

        $caja_dia->update([
            'monto_final' => $ventas_suma + $caja_dia->monto_inicial
        ]);

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
