<?php

namespace App\Livewire\Admin;

use App\Models\Compras;
use App\Models\Producto;
use Livewire\Component;
use Livewire\WithPagination;

class BuscadorCompra extends Component
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

        return view('livewire.admin.buscador-compra', compact('productos', 'productoEncontrado'));
    }
}
