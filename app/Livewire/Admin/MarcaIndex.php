<?php

namespace App\Livewire\Admin;
use App\Models\Marca;
use Livewire\WithPagination;
use Livewire\Component;

class MarcaIndex extends Component
{
    public function render()
    {   
        $marcas = Marca::query();
        
        $marcas = $marcas->paginate(10);
        return view('livewire.admin.marca-index',compact('marcas'));
    }
}
