<?php

namespace Database\Seeders;

use App\Models\Tipo;
use App\Models\Vehiculos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $moto = Tipo::where('nombre', 'moto')->first();
        $coche = Tipo::where('nombre', 'coche')->first();

        $moto1 = Vehiculos::create(
            [
                'modelo' => 'MT09 2024',
                'precio' => '10999.00',
                'stock' => 5,
                'descripcion' => 'MT09 2024',
                'imagen' => 'storage/img/mt09_2024.jpg',
                'tipo_id' => $moto->id,
            ]
        );
        // $moto->tipo($moto);
        // $moto->save();

        $moto2 = Vehiculos::create(
            [
                'modelo' => 'Kawasaki Ninja H2R',
                'precio' => '55000.00',
                'stock' => 5,
                'descripcion' => 'Kawasaki Ninja H2R',
                'imagen' => 'storage/img/h2r-kawasaki.jpg',
                'tipo_id' => $moto->id,
            ]
        );
        $moto3 = Vehiculos::create(
            [
                'modelo' => 'Ducati Panicale',
                'precio' => '35190.00',
                'stock' => 5,
                'descripcion' => 'Ducati Panicale',
                'imagen' => 'storage/img/ducati_panicale.png',
                'tipo_id' => $moto->id,
            ]
        );
        $coche1 = Vehiculos::create(
            [
                'modelo' => 'Lamborghini Veneno',
                'precio' => '8270000.00',
                'stock' => 2,
                'descripcion' => 'Lamborghini Veneno',
                'imagen' => 'storage/img/Lamborghini_Veneno.jpg',
                'tipo_id' => $coche->id,
            ]
        );
        $coche2 = Vehiculos::create(
            [
                'modelo' => 'Porsche 911 Turbo S',
                'precio' => '284211.00',
                'stock' => 5,
                'descripcion' => 'Porsche 911 Turbo S',
                'imagen' => 'storage/img/porsche_911.jpg',
                'tipo_id' => $coche->id,
            ]
        );
        $coche3 = Vehiculos::create(
            [
                'modelo' => 'Audi R8 Phanter',
                'precio' => '183000.00',
                'stock' => 5,
                'descripcion' => 'Audi R8 Phanter',
                'imagen' => 'storage/img/audi_R8.jpg',
                'tipo_id' => $coche->id,
            ]
        );
        $coche4 = Vehiculos::create(
            [
                'modelo' => 'Ferrari 458 Italia 2024',
                'precio' => '245924.00',
                'stock' => 4,
                'descripcion' => 'Ferrari 458 Italia 2024',
                'imagen' => 'storage/img/ferrari_458.jpg',
                'tipo_id' => $coche->id,
            ]
        );
        $coche5 = Vehiculos::create(
            [
                'modelo' => 'Rolls Royce Cullian',
                'precio' => '290000.00',
                'stock' => 3,
                'descripcion' => 'Rolls Royce Cullian',
                'imagen' => 'storage/img/rolls_royce.jpg',
                'tipo_id' => $coche->id,
            ]
        );
        $coche6 = Vehiculos::create(
            [
                'modelo' => 'Mercedes AMG GT 2024',
                'precio' => '244282.00',
                'stock' => 5,
                'descripcion' => 'Mercedes AMG GT 2024',
                'imagen' => 'storage/img/mercedes_amg.jpg',
                'tipo_id' => $coche->id,
            ]
        );
    }
}
