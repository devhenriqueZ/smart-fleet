<?php

namespace Database\Factories;

use App\Models\DepreciationCost;
use App\Models\AutomobileCost;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DepreciationCost>
 */
class DepreciationCostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'capital_annual_cost' => $this->faker->randomNumber(2, true),
            'annual_depreciation_rate' => $this->faker->randomNumber(2, true),
            'automobile_cost_id' => FactoryHelper::getRandomModelId(AutomobileCost::class),
        ];
    }
}