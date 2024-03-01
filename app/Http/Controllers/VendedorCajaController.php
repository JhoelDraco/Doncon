<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Caja;
use DateTime;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\FuncionesVentaController;

use Illuminate\Http\Request;


class VendedorCajaController extends Controller
{

    //Funciones relacionadas con las vistas
    public function index(){

        $funciones_venta = new FuncionesVentaController();
        $caja_dia = $funciones_venta->cajaDiaUsuario();
        $caja = $funciones_venta->encontrarCajaUsuario($caja_dia);

        return view("administrador.vendedor_cajas.index", compact('caja_dia', 'caja'));
    }

    public function crear(){

        $usuario = Auth::user();
        $cajas = Caja::where('estado', true)->get();

        return view("administrador.vendedor_cajas.crear", compact('usuario', 'cajas'));
    }
    

    //Funciones que no se muestran
    public function almacenar(Request $request){
        
        $usuario = Auth::user();

        $usuario = User::findOrFail($usuario->id);

        $id_caja = $request->input('id_caja');

        $caja = Caja::findOrFail($id_caja);

        $ahora = new DateTime();
        $fecha_actual = $ahora->format('Y-m-d H:i:s');

        $usuario->caja_dia()->attach($caja, [
            'fecha_hora' => $fecha_actual,
            'monto_inicial' => $request->input('monto_inicial'),
            'estado' => true
        ]);

        $funciones_venta = new FuncionesVentaController();
        $caja_dia = $funciones_venta->cajaDiaUsuario();

        $caja->update([
            'num_caja_dia' => $caja_dia->id
        ]);

        return redirect()->route('vendedor_cajas.index');
    }

    public function actualizar(){


        return redirect()->route('vendedor_cajas.index');
    }

    public function eliminar(){


        return redirect()->route('vendedor_cajas.index');
    }

}
