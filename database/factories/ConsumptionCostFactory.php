<?php

namespace Database\Factories;

use App\Models\ConsumptionCost;
use App\Models\AutomobileCost;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ConsumptionCost>
 */
class ConsumptionCostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kt_qm_per_liter' => $this->faker->randomNumber(2, true),
            'qt_tires' => rand(2,12),
            'vl_tire_unit' => $this->faker->randomFloat(2, 100, 480),
            'tire_life' => $this->faker->randomNumber(5, true),
            'automobile_cost_id' => FactoryHelper::getRandomModelId(AutomobileCost::class),
        ];
    }
}
