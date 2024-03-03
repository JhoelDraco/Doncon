<?php

namespace App\Livewire\Admin;

use App\Models\Producto;
use Livewire\WithPagination;

use Livewire\Component;

class BuscadorVenta extends Component
{
    use WithPagination;
    public $productobuscar = "";

    public function render()
    {
        $productos = Producto::where('codigo', 'LIKE', '%' . $this->productobuscar . '%')
                  ->paginate(5);

        $productoEncontrado = Producto::where('codigo', 'LIKE' , $this->productobuscar)->first();

        if($productoEncontrado == null){
            $productobuscar = [];
        }

        return view('livewire.admin.buscador-venta', compact('productos', 'productoEncontrado'));
    }
}
