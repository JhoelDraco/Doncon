<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

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
            'password' => bcrypt('123456789')
        ])->assignRole('Administrador');

        User::factory(20)->create();
    }
}
