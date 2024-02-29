<?php

namespace App\Livewire\Admin;
use App\Models\Moneda;
use Livewire\WithPagination;
use Livewire\Component;

class MonedaIndex extends Component
{
    public function render()
    {
        $monedas = Moneda::query();
        
        $monedas = $monedas->paginate(10);

        return view('livewire.admin.moneda-index',compact('monedas'));
    }
}
