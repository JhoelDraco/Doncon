<?php

namespace App\Livewire\Admin;
use App\Models\Proveedor;

use Livewire\Component;
use Livewire\WithPagination;


class ProveedorIndex extends Component
{
    public function render()
    {   
        $proveedor = Proveedor::query();

        $proveedor = $proveedor->paginate(10);

        return view('livewire.admin.proveedor-index', compact('proveedor'));
    }
}
