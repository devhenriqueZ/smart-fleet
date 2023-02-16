<?php

namespace Database\Seeders;

use App\Models\AutomobileType;
use Illuminate\Database\Seeder;

class AutomobileTypeSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $automobileTypes = [
            ['name' => 'Sedã'],
            ['name' => 'SUV'],
            ['name' => 'Caminhão'],
            ['name' => 'Van'],
            ['name' => 'Conversível'],
            ['name' => 'Perua'],
            ['name' => 'Carro Esportivo'],
            ['name' => 'Carro Elétrico'],
            ['name' => 'Pick-up'],
            ['name' => 'Ônibus'],
            ['name' => 'Caminhonete'],
            ['name' => 'Micro-ônibus'],
            ['name' => 'Trator'],
            ['name' => 'Caminhão-tanque'],
            ['name' => 'Motocicleta'],
            ['name' => 'Reboque'],
            ['name' => 'Bicicleta'],
            ['name' => 'Barco'],
            ['name' => 'Outro']
        ];

        AutomobileType::insert($automobileTypes);
    }
}
