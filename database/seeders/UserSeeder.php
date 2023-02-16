<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id' => 1, 
                'name' => "Henrique Gonçalves Lourenço Silva",
                'img_profile' => "www.google.com",
                'phone_number' => "13999999999",
                'cpf_cnpj' => "999999999999",
                'email' => "devhenrique7@gmail.com",
                'password' => Hash::make('123456789')
            ],
            [
                'id' => 2, 
                'name' => "Ricardo Gonçalves Lourenço Silva",
                'img_profile' => "www.facebook.com",
                'phone_number' => "13888888888",
                'cpf_cnpj' => "88888888888",
                'email' => "ricardoapb70@gmail.com",
                'password' => Hash::make('123456789')
            ],
            [
                'id' => 3, 
                'name' => "Wladimir Lourenço Rosa da Silva",
                'img_profile' => "www.instagram.com",
                'phone_number' => "13777777777",
                'cpf_cnpj' => "77777777777",
                'email' => "wladimirlr@gmail.com",
                'password' => Hash::make('123456789')
            ]
        ];

        User::insert($users);

    }
}
