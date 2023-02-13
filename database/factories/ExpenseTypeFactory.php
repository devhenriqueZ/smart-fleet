<?php

namespace Database\Factories;

use App\Models\ExpenseType;
use App\Models\User;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExpenseType>
 */
class ExpenseTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [ 
            'name' => $this->faker->word(),
            'user_id' => FactoryHelper::getRandomModelId(User::class),
        ];

    }
}