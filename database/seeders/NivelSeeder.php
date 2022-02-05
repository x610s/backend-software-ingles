<?php

namespace Database\Seeders;

use App\Models\nivel;
use Illuminate\Database\Seeder;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <=3 ; $i++) {
            nivel::Create([
                'nombre' => 'Nivel '.$i
            ]);
        }
    }
}
