<?php

namespace Database\Factories;

use App\Models\RouteExpense;
use App\Models\Route;
use App\Models\ExpenseType;
use Database\Factories\Helpers\FactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RouteExpense>
 */
class RouteExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'vl_expense' => $this->faker->randomFloat(2, 300, 5000), 
            'expense_type_id' => FactoryHelper::getRandomModelId(ExpenseType::class),
            'route_id' => FactoryHelper::getRandomModelId(Route::class),
        ];
    }
}
