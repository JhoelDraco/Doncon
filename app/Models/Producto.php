<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $guarded = [];

    public function detalle_venta(){
        
        return $this->belongsToMany(Venta::class, 'detalleVenta', 'id_productos', 'id_ventas')->withPivot('cantidad', 'subtotal');
    }
    public function tipos()
    {
        return $this->belongsToMany(Tipo::class, 'detalletipoproducto','id_producto', 'id_tipoproducto');
    }
    public function marcas()
    {
        return $this->belongsToMany(Marca::class, 'detallemarcaproducto','id_producto', 'id_marcaproducto');
    }
}
