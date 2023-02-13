<?php

namespace Database\Factories;

use App\Models\MaintenanceCost;
use App\Models\AutomobileCost;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MaintenanceCost>
 */
class MaintenanceCostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cleaning' => $this->faker->randomFloat(2, 100, 500),
            'accessories' => $this->faker->randomFloat(2, 100, 500),
            'automobile_cost_id' => FactoryHelper::getRandomModelId(AutomobileCost::class),
        ];
    }
}
