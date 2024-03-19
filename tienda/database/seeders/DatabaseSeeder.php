<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);
        Role::create(['name' => 'editor']);
        
        $this->call([
            
            UserSeeder::class,
            CuentaBancariaSeeder::class,
            TipoVehiculoSeeder::class,
            VehiculosSeeder::class,
            MarcasSeeder::class,
            ValoracionSeeder::class,
            AccesoriosSeeder::class,
        ]);
    }
}
