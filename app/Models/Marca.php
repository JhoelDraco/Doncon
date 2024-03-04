<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    protected $table = 'marcaproducto';
    protected $guarded = [];
    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'detallemarcaproducto');
    }
}
