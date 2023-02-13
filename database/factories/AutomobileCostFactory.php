<?php

namespace Database\Factories;

use App\Models\AutomobileCost;
use App\Models\Automobile;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AutomobileCost>
 */
class AutomobileCostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'vl_automobile' => $this->faker->randomFloat(2, 20000, 100000),
            'estimated_mileage' => rand(1000, 10000),
            'automobile_id' => FactoryHelper::getRandomModelId(Automobile::class),
        ];
    }
}
