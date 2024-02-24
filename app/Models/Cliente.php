<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $guarded = [];

    public function empresa(){
        return $this->hasMany(Empresa::class, 'id_clientes');
    }

    public function persona(){
        return $this->hasMany(Persona::class, 'id_clientes');
    }
}
