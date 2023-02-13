<?php

namespace Database\Seeders;

use App\Models\DepreciationCost;
use Database\Factories\Helpers\FactoryHelper;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

class DepreciationCostSeeder extends Seeder
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
        $this->truncate('depreciation_costs');
        DepreciationCost::factory(10)->create();
        $this->enableForeignKeys();
    }
}
