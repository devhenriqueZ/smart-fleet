<?php

namespace Database\Seeders;

use App\Models\WorkshopService;
use Illuminate\Database\Seeder;

class WorkshopServiceSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $workshopServices = [
            ['name' => 'Troca de óleo'],
            ['name' => 'Revisão'],
            ['name' => 'Alinhamento'],
            ['name' => 'Balanceamento'],
            ['name' => 'Troca de pneus'],
            ['name' => 'Freios'],
            ['name' => 'Suspensão'],
            ['name' => 'Ar-condicionado'],
            ['name' => 'Injeção eletrônica'],
            ['name' => 'Transmissão'],
            ['name' => 'Bateria'],
            ['name' => 'Embreagem'],
            ['name' => 'Faróis'],
            ['name' => 'Ignição'],
            ['name' => 'Velas'],
            ['name' => 'Correia dentada'],
            ['name' => 'Escapamento'],
            ['name' => 'Amortecedor'],
            ['name' => 'Câmbio'],
            ['name' => 'Filtro de ar'],
            ['name' => 'Outros'],
        ];

        WorkshopService::insert($workshopServices);
    }
}
