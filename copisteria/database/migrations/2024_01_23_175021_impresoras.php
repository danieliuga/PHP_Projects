<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('impresoras' ,function (Blueprint $table) {
            $table->id();
            $table->integer('tintaNegra');
            $table->integer('tintaAmarilla');
            $table->integer('tintaCian');
            $table->integer('tintaRosa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

// primero crear base de datos y modificar .env
// crear modelos
// migrations para crear base de datos
// crear controllers
// hacer rutas

//laravel new app
//php artisan serve
//php artisan make:model impresion
//php artisan make:migration impresoras
// php artisan make:controller copisteriaController