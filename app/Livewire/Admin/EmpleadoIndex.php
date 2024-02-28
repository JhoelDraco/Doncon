<?php

namespace App\Livewire\Admin;
use App\Models\Empleado;
use Livewire\WithPagination;
use Livewire\Component;

class EmpleadoIndex extends Component
{
    public function render()
    {
        $empleados = Empleado::query();

        if (!empty($this->empleadobuscar)) {
            $empleados->where(function ($query) {
                $query->where('nombre1', 'LIKE', '%' . $this->empleadobuscar . '%')
                      ->orWhere('apellido1', 'LIKE', '%' . $this->empleadobuscar . '%');
            });
        }

        $empleados = $empleados->paginate(10);
        return view('livewire.admin.empleado-index',compact('empleados'));
    }
}
