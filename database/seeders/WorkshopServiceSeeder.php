<?php

namespace Database\Seeders;

use App\Models\WorkshopService;
use Database\Factories\Helpers\FactoryHelper;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

class WorkshopServiceSeeder extends Seeder
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
        $this->truncate('workshop_services');
        WorkshopService::factory(10)->create();
        $this->enableForeignKeys();
    }
}
