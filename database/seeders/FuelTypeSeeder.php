<?php

namespace Database\Seeders;

use App\Models\FuelType;
use Illuminate\Database\Seeder;

class FuelTypeSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $fuels = [
            ['name' => 'Gasolina'],
            ['name' => 'Diesel'],
            ['name' => 'Etanol'],
            ['name' => 'GNV'],
            ['name' => 'Híbrido'],
            ['name' => 'Elétrico'],
        ];

        FuelType::insert($fuels);
    }
}
