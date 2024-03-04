<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    protected $table = 'tiposproducto';
    protected $guarded = [];
    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'detalletipoproducto');
    }
}
