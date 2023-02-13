<?php

namespace Database\Factories;

use App\Models\OtherCost;
use App\Models\AutomobileCost;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OtherCost>
 */
class OtherCostFactory extends Factory
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
            'type' => rand(0,1),
            'cost' => $this->faker->randomFloat(2, 200, 500),
            'automobile_cost_id' => FactoryHelper::getRandomModelId(AutomobileCost::class),
        ];
    }
}