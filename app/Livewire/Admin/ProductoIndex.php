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
        $productos=Producto::where('nombre','LIKE','%'.$this->productobuscar.'%')->paginate(10);
        return view('livewire.admin.producto-index',compact('productos'));
    }
}
