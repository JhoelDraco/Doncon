<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'ventas';

    protected $guarded = [];

    public function detalle_venta(){
        return $this->belongsToMany(Producto::class, 'detalleVenta', 'id_ventas', 'id_productos')->withPivot('cantidad', 'subtotal');
    }
}
