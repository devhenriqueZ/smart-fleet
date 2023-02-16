<?php

namespace Database\Factories;

use App\Models\Driver;
use App\Models\User;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'ic_type' => rand(0,1), // próprio ou terceiro
            'phone_number' => $this->faker->cellphoneNumber(),
            'cpf_cnpj' => $this->faker->cpf(),
            'cnh' => $this->faker->randomNumber(9, true),
            'cnh_category' => $this->faker->randomElement(['A', 'B', 'AB', 'AC', 'CD']),
            'expiration_date' => $this->faker->date(),
            'salary' => $this->faker->randomFloat(2, 2500, 3400),
            'created_by_user_id' => FactoryHelper::getRandomModelId(User::class),
        ];
    }
}
