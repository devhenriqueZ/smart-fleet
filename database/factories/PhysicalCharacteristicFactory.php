<?php

namespace Database\Factories;

use App\Models\PhysicalCharacteristic;
use App\Models\LoadModel;
use App\Models\Automobile;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PhysicalCharacteristic>
 */
class PhysicalCharacteristicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tare' => $this->faker->randomNumber(4,true),
            'capacity' => rand(2,14),
            'total_gross_weight' => rand(5,16),
            'height' => $this->faker->randomFloat(2, 1, 2),
            'width' => $this->faker->randomFloat(2, 1, 2),
            'lenght' => $this->faker->randomFloat(2, 2, 5),
            'load_model_id' => FactoryHelper::getRandomModelId(LoadModel::class),
            'automobile_id' => FactoryHelper::getRandomModelId(Automobile::class),
        ];
    }
}
