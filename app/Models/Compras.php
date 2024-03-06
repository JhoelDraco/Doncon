<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    use HasFactory;

    protected $table = 'compras';

    protected $guarded = [];

    public function detalle_compra(){
        return $this->belongsToMany(Producto::class, 'proveedor', 'id_ventas', 'id_productos')->withPivot('cantidad', 'subtotal');
    }
}
