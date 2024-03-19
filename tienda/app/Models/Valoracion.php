<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    use HasFactory;

    protected $fillable = [
        'puntuacion',
        'comentario',
    ];

    function user() {
        return $this->belongsTo(User::class);
    }

    function vehiculos() {
        return $this->belongsTo(Vehiculos::class, 'vehiculo_id');
    }
}
