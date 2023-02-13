<?php

namespace Database\Seeders;

use App\Models\DocsInsuranceCost;
use Database\Factories\Helpers\FactoryHelper;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

class DocsInsuranceCostSeeder extends Seeder
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
        $this->truncate('docs_insurance_costs');
        DocsInsuranceCost::factory(10)->create();
        $this->enableForeignKeys();
    }
}
