<?php

namespace Database\Factories;

use App\Models\RouteDetail;
use App\Models\Route;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RouteDetail>
 */
class RouteDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'departure' => $this->faker->word(),
            'destination' => $this->faker->word(),
            'distance' => $this->faker->randomNumber(3, true),
            'route_id' => FactoryHelper::getRandomModelId(Route::class),
        ];
    }
}