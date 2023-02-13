<?php

namespace Database\Factories;

use App\Models\Automobile;
use App\Models\AutomobileType;
use App\Models\FuelType;
use App\Models\User;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Automobile>
 */
class AutomobileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'license_plate' => $this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'brand' => $this->faker->word(),
            'model' => $this->faker->word(), 
            'chassis' =>$this->faker->regexify('[A-Z]{18}[0-4]{4}'),
            'renavam' => $this->faker->randomNumber(9, true),
            'yy_manufacture' => $this->faker->year(),
            'yy_model' => $this->faker->year(),
            'color' => $this->faker->colorName(),
            'motor' => $this->faker->name(),
            'power' => $this->faker->name(),
            'observations' => $this->faker->text(),
            'automobile_type_id' => FactoryHelper::getRandomModelId(AutomobileType::class),
            'fuel_type_id' => FactoryHelper::getRandomModelId(FuelType::class),
            'user_id' => FactoryHelper::getRandomModelId(User::class),
        ];
    }
}
