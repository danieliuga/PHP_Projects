<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'vehiculo_id', 
        'cantidad'
    ];

    function user() {
        return $this->belongsTo(User::class);
    }

    public function vehiculos() {
        return $this->belongsTo(Vehiculos::class, 'vehiculos_id');
    }
}
