<?php

namespace Database\Seeders;

use App\Models\leccion;
use Illuminate\Database\Seeder;

class LeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #region Leccion 1
          leccion::Create([
            'nombre' => 'Pronombres demostrativos',
            'nivel_id' => 1
        ]);
         leccion::Create([
             'nombre' => 'Verbo To be',
             'nivel_id' => 1
         ]);
         leccion::Create([
             'nombre' => 'Profesiones',
             'nivel_id' => 1
         ]);
    #endregion


   #region Leccion 2

    #endregion


   #region Leccion 3

    #endregion
    }
}
