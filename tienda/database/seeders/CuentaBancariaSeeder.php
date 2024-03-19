<?php

namespace Database\Seeders;

use App\Models\CuentaBancaria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CuentaBancariaSeeder extends Seeder
{
    public function run(): void
    {
        $cuenta1 = new CuentaBancaria();
        $cuenta1->id = 1;
        $cuenta1->numeroCuenta = 123412341234;
        $cuenta1->dinero = 10000000.00;
        $cuenta1->user_id = 1;
        $cuenta1->save();

        $cuenta2 = new CuentaBancaria();
        $cuenta2->id = 2;
        $cuenta2->numeroCuenta = 567856785678;
        $cuenta2->dinero = 10000000.00;
        $cuenta2->user_id = 2;
        $cuenta2->save();

        $cuenta3 = new CuentaBancaria();
        $cuenta3->id = 3;
        $cuenta3->numeroCuenta = 234523452345;
        $cuenta3->dinero = 10000000.00;
        $cuenta3->user_id = 3;
        $cuenta3->save();

        $cuenta4 = new CuentaBancaria();
        $cuenta4->id = 4;
        $cuenta4->numeroCuenta = 345634563456;
        $cuenta4->dinero = 10000000.00;
        $cuenta4->user_id = 4;
        $cuenta4->save();
    }

}
