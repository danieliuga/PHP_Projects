<?php

namespace Database\Factories;

use App\Models\CuentaBancaria;
use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CuentaBancaria>
 */
class CuentaBancariaFactory extends Factory
{
    protected $model=CuentaBancaria::class;
    public function definition(): array
    {
        $user = User::factory()->create();
        return [
            'numeroCuenta' => $this->faker->creditCardNumber(),
            'dinero' => $this->faker->numberBetween(40000000, 10000000),
            'user_id' => $user->id
        ];
    }

    public function getRandomId(){
        return User::inRandomOrder()->value('id');
    }
}
