<?php

namespace Database\Factories;

use App\Models\DocsInsuranceCost;
use App\Models\AutomobileCost;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DocsInsuranceCost>
 */
class DocsInsuranceCostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tracking' => $this->faker->randomFloat(2, 100, 340),
            'rcf_insurance' => $this->faker->randomFloat(2, 100, 340),
            'annual_insurance' => $this->faker->randomFloat(2, 100, 340),
            'ipva_depvat_licenc' => $this->faker->randomFloat(2, 100, 340),
            'automobile_cost_id' => FactoryHelper::getRandomModelId(AutomobileCost::class),
        ];
    }
}
