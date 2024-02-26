<?php

namespace App\Livewire\Admin;
use App\Models\Producto;

use Livewire\Component;
use Livewire\WithPagination;


class ProductoIndex extends Component
{   
    use WithPagination;
    protected $paginationTheme = 'bootstrap'; 
    public $productobuscar;
    
    public function render()
    {   
        $productos = Producto::query();

        if (!empty($this->productobuscar)) {
            $productos->where(function ($query) {
                $query->where('nombre', 'LIKE', '%' . $this->productobuscar . '%')
                      ->orWhere('codigo', 'LIKE', '%' . $this->productobuscar . '%');
            });
        }

        $productos = $productos->paginate(10);

        return view('livewire.admin.producto-index', compact('productos'));
    }
}
