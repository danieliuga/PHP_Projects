<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class impresora extends Model
{
    use HasFactory;
    protected $table = 'impresoras';
    public $timestamps = false;

    protected $fillable = [
        'tintaNegra',
        'tintaAmarilla',
        'tintaCian',
        'tintaRosa'
    ];

    // esto es para hacer relaciones en la base de datos
    public function imprimir () {
        return $this->hasMany(impresion::class, 'idImpresora');
    }
}
