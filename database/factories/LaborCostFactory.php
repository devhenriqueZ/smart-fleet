<?php

namespace Database\Factories;

use App\Models\LaborCost;
use App\Models\Driver;
use App\Models\AutomobileCost;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LaborCost>
 */
class LaborCostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'social_chargers' => $this->faker->randomFloat(2, 300, 5000),
            'driver_id' => FactoryHelper::getRandomModelId(Driver::class),
            'automobile_cost_id' => FactoryHelper::getRandomModelId(AutomobileCost::class),
        ];
    }
}
