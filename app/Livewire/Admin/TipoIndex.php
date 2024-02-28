<?php

namespace App\Livewire\Admin;
use App\Models\Tipo;
use Livewire\WithPagination;
use Livewire\Component;


class TipoIndex extends Component
{   
    protected $paginationTheme = 'bootstrap'; 
    use WithPagination;
    public function render()
    {
        $tipos = Tipo::query();
        
        $tipos = $tipos->paginate(10);
        return view('livewire.admin.tipo-index',compact('tipos'));
    }
}
