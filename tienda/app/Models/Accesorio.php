<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accesorio extends Model
{
    use HasFactory;

    protected $fillable = [
        'modelo',
        'precio',
        'stock',
        'descripcion',
        'imagen',
    ];

    function ventas()
    {
        return $this->hasMany(Ventas::class);
    }
}
