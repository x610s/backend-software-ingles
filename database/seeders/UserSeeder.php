<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::Create([
            'name' => 'Estudiante1',
            'email' => 'e1@prueba.com',
            'password' => '1234',
            'role'=> 2,
            'nivel_id'=> 1,
        ]);

        User::Create([
            'name' => 'Estudiante2',
            'email' => 'e2@prueba.com',
            'password' => '1234',
            'role'=> 2,
            'nivel_id'=> 1
        ]);

        User::Create([
            'name' => 'Docente',
            'email' => 'docente@prueba.com',
            'password' => '1234',
            'role'=> 1
        ]);
    }
}
