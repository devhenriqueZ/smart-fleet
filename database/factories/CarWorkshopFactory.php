<?php

namespace Database\Factories;

use App\Models\CarWorkshop;
use App\Models\User;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarWorkshop>
 */
class CarWorkshopFactory extends Factory
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
            'phone_number' => $this->faker->cellphoneNumber(),
            'email' => $this->faker->unique()->email(),
            'observations' =>$this->faker->text(),
            'created_by_user_id' => FactoryHelper::getRandomModelId(User::class),
        ];
    }
}
