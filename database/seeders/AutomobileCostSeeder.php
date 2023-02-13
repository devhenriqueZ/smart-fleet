<?php

namespace Database\Seeders;

use App\Models\AutomobileCost;
use Database\Factories\Helpers\FactoryHelper;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

class AutomobileCostSeeder extends Seeder
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
        $this->truncate('automobile_costs');
        AutomobileCost::factory(10)->create();
        $this->enableForeignKeys();
    }
}
