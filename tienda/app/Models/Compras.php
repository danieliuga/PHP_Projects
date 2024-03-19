<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'vehiculos_id',
        'tipo_id',
        'estado',
    ];

    function user() {
        return $this->belongsTo(User::class);
    }

    function vehiculos() {
        return $this->belongsTo(Vehiculos::class, 'vehiculos_id');
    }

    function tipo() {
        return $this->belongsTo(Tipo::class, 'tipo_id');
    }
}
