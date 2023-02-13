<?php

namespace Database\Factories;

use App\Models\Trip;
use App\Models\User;
use App\Models\FuelType;
use App\Models\Automobile;
use App\Models\Route;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'trip_date' => $this->faker->date(),
            'trip_code' => $this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'ini_odometer' => $this->faker->numberBetween(50, 100),
            'end_odometer' => $this->faker->numberBetween(100, 300),
            'liter_price' => $this->faker->randomFloat(2, 5, 7), //float
            'total_expense' => $this->faker->randomFloat(2, 400, 780),//float
            'total_price' => $this->faker->randomFloat(2, 780, 1420),//float
            'fuel_type_id' => FactoryHelper::getRandomModelId(FuelType::class),
            'automobile_id' => FactoryHelper::getRandomModelId(Automobile::class),
            'route_id' => FactoryHelper::getRandomModelId(Route::class),
            'user_id' => FactoryHelper::getRandomModelId(User::class),
        ];
    }
}