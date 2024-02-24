<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresas';

    protected $guarded = [];

    public function cliente(){
        return $this->belongsTo(Cliente::class, 'id_clientes');
    }
}
