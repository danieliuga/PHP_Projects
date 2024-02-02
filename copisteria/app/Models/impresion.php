<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class impresion extends Model
{
    use HasFactory;
    protected $table = 'impresion';

    protected $fillable = [
        'texto',
        'idImpresora'
    ];

    public function impresora () {
        return $this->belongsTo(impresora::class);
    }

}
