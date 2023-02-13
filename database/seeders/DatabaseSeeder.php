<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(FuelTypeSeeder::class);
        $this->call(ExpenseTypeSeeder::class); 
        $this->call(AutomobileTypeSeeder::class);
        $this->call(AutomobileSeeder::class);
        $this->call(AutomobileCostSeeder::class);
        $this->call(CarWorkshopSeeder::class);
        $this->call(WorkshopServiceSeeder::class);
        $this->call(MaintenanceSeeder::class);
        $this->call(ConsumptionCostSeeder::class);
        $this->call(DepreciationCostSeeder::class);
        $this->call(DocsInsuranceCostSeeder::class);
        $this->call(DriverSeeder::class);
        $this->call(RouteSeeder::class);
        $this->call(RouteDetailSeeder::class);
        $this->call(RouteExpenseSeeder::class);
        $this->call(LaborCostSeeder::class);
        $this->call(LoadModelSeeder::class);
        $this->call(MaintenanceCostSeeder::class);
        $this->call(OtherCostSeeder::class);
        $this->call(PhysicalCharacteristicSeeder::class);
        $this->call(TripSeeder::class);
    }
}
