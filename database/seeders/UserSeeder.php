<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Alfredo Gonzales',
            'email' => 'alfredogonzales.bo@gmail.com',
            'password' => bcrypt('Alfredo12345'),
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Jhoel El FullStack',
            'email' => 'jhoel.bo@gmail.com',
            'password' => bcrypt('jhoel1234'),
        ])->assignRole('Observador');

        User::factory(20)->create();
    }
}
