<?php

namespace App\Livewire\Admin;

use App\Http\Controllers\Admin\FuncionesVentaController;

use Livewire\Component;
use Livewire\WithPagination;

class BuscadorRegistroVentas extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap'; 
    public $buscarRegistro = "";

    public function render()
    {


        $funcionesVenta = new FuncionesVentaController();
        

        $registroVentas = $funcionesVenta->registroVentas($this->buscarRegistro);
        
        $registroVentas = $registroVentas->paginate(10);

        return view('livewire.admin.buscador-registro-ventas', compact('registroVentas'));
    }
}
