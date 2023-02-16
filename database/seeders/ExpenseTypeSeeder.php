<?php

namespace Database\Seeders;

use App\Models\ExpenseType;
use Illuminate\Database\Seeder;

class ExpenseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $expenses = [
            ['name' => 'Alimentação'],
            ['name' => 'Pedágio'],
            ['name' => 'Multa'],
            ['name' => 'Ajudante'],
            ['name' => 'Segurança'],
            ['name' => 'Acomodação'],
            ['name' => 'Estacionamento'],
            ['name' => 'Impostos'],
            ['name' => 'Lavagem'],
            ['name' => 'Seguro'],
            ['name' => 'Telefone'],
            ['name' => 'Outros'],

        ];

        ExpenseType::insert($expenses);
    }
}
