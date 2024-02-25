<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersIndex extends Component
{

    use WithPagination;

    public $buscadorUsuario;

    protected $paginationTheme = 'bootstrap';

    public function updatingbuscadorUsuario(){
        $this->resetPage();
    }

    public function render()
    {
        $usuarios = User::where('name', 'LIKE', '%' . $this->buscadorUsuario . '%')
        ->orWhere('email', 'LIKE', '%' . $this->buscadorUsuario . '%')
        ->paginate();

        return view('livewire.admin.users-index',  compact('usuarios'));
    }
}
