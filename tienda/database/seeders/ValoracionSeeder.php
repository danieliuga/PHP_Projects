<?php

namespace Database\Seeders;

use App\Models\Valoracion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValoracionSeeder extends Seeder
{
    public function run(): void
    {
        Valoracion::create([
            'user_id' => 1,
            'vehiculo_id' => 1,
            'puntuacion' => 5,
            'comentario' => 'Gran vehículo, muy satisfecho con la compra.',
        ]);

        Valoracion::create([
            'user_id' => 2,
            'vehiculo_id' => 1,
            'puntuacion' => 4,
            'comentario' => 'Buen precio, pero la calidad podría ser mejor.',
        ]);

        Valoracion::create([
            'user_id' => 3,
            'vehiculo_id' => 2,
            'puntuacion' => 3,
            'comentario' => 'No muy contento con la compra, esperaba más por el precio.',
        ]);

        Valoracion::create([
            'user_id' => 4,
            'vehiculo_id' => 2,
            'puntuacion' => 5,
            'comentario' => 'Excelente vehículo, cumple con mis expectativas.',
        ]);

        Valoracion::create([
            'user_id' => 1,
            'vehiculo_id' => 3,
            'puntuacion' => 4,
            'comentario' => 'Buen rendimiento y diseño, pero un poco caro.',
        ]);

        Valoracion::create([
            'user_id' => 1,
            'vehiculo_id' => 4,
            'puntuacion' => 3,
            'comentario' => 'Buen vehículo, pero no lo recomendaría por su precio.',
        ]);

        Valoracion::create([
            'user_id' => 2,
            'vehiculo_id' => 5,
            'puntuacion' => 4,
            'comentario' => 'Buena relación calidad-precio, pero podría mejorar en algunos aspectos.',
        ]);

        Valoracion::create([
            'user_id' => 3,
            'vehiculo_id' => 6,
            'puntuacion' => 4,
            'comentario' => 'Muy buen vehículo, superó mis expectativas.',
        ]);

        Valoracion::create([
            'user_id' => 4,
            'vehiculo_id' => 7,
            'puntuacion' => 5,
            'comentario' => 'Increíble vehículo, lo recomendaría a cualquiera.',
        ]);

        Valoracion::create([
            'user_id' => 1,
            'vehiculo_id' => 8,
            'puntuacion' => 3,
            'comentario' => 'Precio razonable, pero no tan impresionado con el rendimiento.',
        ]);
    }
}
