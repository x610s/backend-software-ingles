<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        NivelSeeder::class,
        UserSeeder::class,
        LeccionSeeder::class,
        PreguntaSeeder::class,
        OpcionSeeder::class,
        PosibleRespuestaSeeder::class,
        ]);


    }
}
