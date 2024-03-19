<?php

namespace Database\Seeders;

use App\Models\Accesorio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccesoriosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Accesorio::create([
            'modelo' => 'CASCO ARAI RX-7V EVO',
            'precio' => 855,
            'stock' => 10,
            'descripcion' => 'Casco integral de alta calidad con diseño aerodinámico y visor antirrayaduras.',
            'imagen' => 'storage/img/casco_arai.png',
        ]);
        Accesorio::create([
            'modelo' => 'Intercomunicador para Casco Sena 20S',
            'precio' => 159,
            'stock' => 15,
            'descripcion' => 'Intercomunicador Bluetooth para casco de moto y cancelación de ruido.',
            'imagen' => 'storage/img/intercomunicador_sena_20s.png',
        ]);
        Accesorio::create([
            'modelo' => 'Juego de 2 Llantas Marchesini Kompe ',
            'precio' => 2000,
            'stock' => 5,
            'descripcion' => 'Juego de 4 llantas de aleación ligera con diseño deportivo y acabado en negro mate.',
            'imagen' => 'storage/img/llantas.png',
        ]);
        Accesorio::create([
            'modelo' => 'Escape Akrapovič Evolution Line',
            'precio' => 1500,
            'stock' => 3,
            'descripcion' => 'Sistema de escape de titanio con diseño de alta calidad y sonido deportivo.',
            'imagen' => 'storage/img/akrapovic_evolution_line.png',
        ]);
        Accesorio::create([
            'modelo' => 'Suspensión Deportiva Bilstein B14',
            'precio' => 1200,
            'stock' => 7,
            'descripcion' => 'Suspensión deportiva de alto rendimiento con ajuste de altura y dureza.',
            'imagen' => 'storage/img/suspension_bilstein_b14.png',
        ]);
        Accesorio::create([
            'modelo' => 'Kit de Frenos Brembo GT',
            'precio' => 3000,
            'stock' => 2,
            'descripcion' => 'Kit de frenos de alto rendimiento con pinzas de aluminio y discos ventilados.',
            'imagen' => 'storage/img/kit_frenos_brembo_gt.png',
        ]);
        Accesorio::create([
            'modelo' => 'Asiento deportivo BMW M S1000R',
            'precio' => 1000,
            'stock' => 4,
            'descripcion' => 'Asiento deportivo de fibra de vidrio con sujeción lateral y almohadillas ajustables.',
            'imagen' => 'storage/img/asiento_s1000r.png',
        ]);
        Accesorio::create([
            'modelo' => 'Guantes de Moto Alpinestars SP-1',
                'precio' => 150,
                'stock' => 20,
                'descripcion' => 'Guantes de cuero con protecciones de carbono en nudillos y palma.',
                'imagen' => 'storage/img/guantes_alpinestars_sp1.png',
        ]);
        Accesorio::create([
            'modelo' => 'Alforjas para Moto Givi E22',
                'precio' => 200,
                'stock' => 15,
                'descripcion' => 'Alforjas laterales rígidas con capacidad para 22 litros cada una.',
                'imagen' => 'storage/img/alforjas_givi_e22.png',
        ]);
    }
}
