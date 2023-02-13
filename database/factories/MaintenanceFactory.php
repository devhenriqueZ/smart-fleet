<?php

namespace Database\Factories;

use App\Models\Maintenance;
use App\Models\WorkshopService;
use App\Models\CarWorkshop;
use App\Models\Automobile;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Maintenance>
 */
class MaintenanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'maintenance_price' => $this->faker->randomFloat(2, 1000, 5000),
            'service_id' => FactoryHelper::getRandomModelId(WorkshopService::class),
            'car_workshop_id' => FactoryHelper::getRandomModelId(CarWorkshop::class),
            'automobile_id' => FactoryHelper::getRandomModelId(Automobile::class),
        ];
    }
}