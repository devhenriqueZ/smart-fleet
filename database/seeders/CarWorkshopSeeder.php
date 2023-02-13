<?php

namespace Database\Seeders;

use App\Models\CarWorkshop;
use Database\Factories\Helpers\FactoryHelper;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

class CarWorkshopSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncate('car_workshops');
        CarWorkshop::factory(10)->create();
        $this->enableForeignKeys();
    }
}
