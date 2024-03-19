<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaBancaria extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'numeroCuenta',
        'dinero',
    ];

    function user() {
        return $this->belongsTo(User::class);
    }
}
