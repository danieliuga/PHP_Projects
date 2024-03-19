<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'accesorios_id',
    ];

    function user() {
        return $this->belongsTo(User::class);
    }

    function accesorios() {
        return $this->belongsTo(Accesorio::class, 'accesorios_id');
    }
    
}
