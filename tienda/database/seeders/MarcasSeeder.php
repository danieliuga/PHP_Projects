<?php

namespace Database\Seeders;

use App\Models\Marcas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Marcas::create([
            'modelo' => 'Ducati',
            'pais_origen' => 'Italia',
            'descripcion' => 'Ducati es una marca italiana de motocicletas.',
            'link' => 'https://www.ducati.com/es/es/home',
            'imagen' => 'storage/img/ducati.png',
        ]);

        Marcas::create([
            'modelo' => 'Yamaha',
            'pais_origen' => 'Japón',
            'descripcion' => 'Yamaha es una marca japonesa de motocicletas y productos electrónicos.',
            'link' => 'https://www.yamaha-motor.eu/es/es/home/',
            'imagen' => 'storage/img/yamaha.png',
        ]);

        Marcas::create([
            'modelo' => 'Kawasaki',
            'pais_origen' => 'Japón',
            'descripcion' => 'Kawasaki es una marca japonesa de motocicletas y vehículos todo terreno.',
            'link' => 'https://www.kawasaki.es/es/products',
            'imagen' => 'storage/img/kawasaki.png',
        ]);

        Marcas::create([
            'modelo' => 'Audi',
            'pais_origen' => 'Alemania',
            'descripcion' => 'Audi es una marca alemana de automóviles de lujo.',
            'link' => 'https://www.audi.es/es/web/es.html',
            'imagen' => 'storage/img/audi.png',
        ]);

        Marcas::create([
            'modelo' => 'Porsche',
            'pais_origen' => 'Alemania',
            'descripcion' => 'Porsche es una marca alemana de automóviles deportivos.',
            'link' => 'https://www.porsche.com/spain/',
            'imagen' => 'storage/img/porsche.png',
        ]);

        Marcas::create([
            'modelo' => 'Ferrari',
            'pais_origen' => 'Italia',
            'descripcion' => 'Ferrari es una marca italiana de automóviles deportivos de lujo.',
            'link' => 'https://www.ferrari.com/es-ES/auto/gama',
            'imagen' => 'storage/img/ferrari.png',
        ]);

        Marcas::create([
            'modelo' => 'Rolls Royce',
            'pais_origen' => 'Reino Unido',
            'descripcion' => 'Rolls Royce es una marca británica de automóviles de lujo.',
            'link' => 'https://www.rolls-roycemotorcars.com/en_GB/home.html',
            'imagen' => 'storage/img/rolls_royce.png',
        ]);

        Marcas::create([
            'modelo' => 'Mercedes',
            'pais_origen' => 'Alemania',
            'descripcion' => 'Mercedes es una marca alemana de automóviles de lujo.',
            'link' => 'https://www.mercedes-benz.es/?',
            'imagen' => 'storage/img/mercedes.png',
        ]);

        Marcas::create([
            'modelo' => 'Koenigsegg',
            'pais_origen' => 'Suecia',
            'descripcion' => 'Koenigsegg es una marca sueca de automóviles deportivos de lujo.',
            'link' => 'https://www.koenigsegg.com/home',
            'imagen' => 'storage/img/koenigsegg.png',
        ]);
    }
}
