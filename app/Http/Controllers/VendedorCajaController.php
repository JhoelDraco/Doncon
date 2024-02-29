<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Caja;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VendedorCajaController extends Controller
{

    //Funciones relacionadas con las vistas
    public function index(){

        $usuario = Auth::user();

        $usuario = User::findOrFail($usuario->id);

        $caja_dia = DB::select('SELECT cajadia.id FROM cajadia 
                    JOIN users ON users.id = cajadia.id_usuario ORDER BY cajadia.id DESC');

        if (!empty($caja_dia)) {
            $caja_dia_id = $caja_dia[0]; // Obtener el primer resultado
        }
        

        if($caja_dia == null){
            $caja = [];
        }else{
            $caja = Caja::select('caja.*', 'cajadia.id as id_caja_dia')
            ->join('cajadia', 'caja.id', '=', 'cajadia.id_caja')
            ->where('num_caja_dia', $caja_dia_id->id)
            ->first();
        }

        return view("administrador.vendedor_cajas.index", compact('caja_dia', 'caja'));
    }

    public function crear(){

        $usuario = Auth::user();
        $cajas = Caja::all();

        return view("administrador.vendedor_cajas.crear", compact('usuario', 'cajas'));
    }

    /*
    public function mostrar(Marca $marca){
        return view('administrador.marca.mostrar', compact('marca'));
    }

    public function editar(Marca $marca){
        return view('administrador.marca.editar', compact('marca'));
    }
    */

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

        $caja_dia_id = User::select('users.id', 'cajadia.id', 'cajadia.id as caja_dia_id')
        ->join('cajadia', 'users.id', '=', 'id_usuario')
        ->where('id_usuario', $usuario->id)
        ->orderBy('fecha_hora', 'desc')
        ->first();

        $caja->update([
            'num_caja_dia' => $caja_dia_id->caja_dia_id
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
