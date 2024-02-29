<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Caja extends Model
{
    use HasFactory;

    protected $table = 'caja';

    protected $guarded = [];

    public function caja_dia(){
        return $this->belongsToMany(User::class, 'cajadia', 'id_caja', 'id_usuario')->withPivot('fecha_hora', 'monto_inicial', 'monto_final');
    }
}
