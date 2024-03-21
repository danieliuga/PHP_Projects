<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    use HasFactory;

    protected $fillable = [
        'modelo',
        'precio',
        'stock',
        'descripcion',
        'imagen',
    ];

    function compras()
    {
        return $this->hasMany(Compras::class);
    }

    public function tipo()
    {
        return $this->belongsTo(Tipo::class, 'tipo_id');
    }

    public function carrito()
    {
        return $this->hasMany(Carrito::class);
    }
}

//composer require spatie/laravel-permission
//php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
//php artisan migrate
//database -> seeders -> .php
//php artisan db:seed

//Route::group(['middleware' => ['role:admin']], function () {
    // Rutas que solo los administradores pueden acceder
//});

// Asignar un usuario al rol de administrador
//routes->console.php
//escribir codigo necesario
//php artisan assign-admin-role

// Para linquear las imagenes al storage
// php artisan storage:link 
