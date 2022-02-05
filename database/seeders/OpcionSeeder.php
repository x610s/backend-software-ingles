<?php

namespace Database\Seeders;

use App\Models\opcion;
use Illuminate\Database\Seeder;

class OpcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #region leccion 3
        opcion::Create([
            'descripcion' => 'I dont know',
            'correcta' => 0,
            'pregunta_id' => 7
        ]);
           opcion::Create([
            'descripcion' => "No, Juan isn't a doctor",
            'correcta' => 1,
            'pregunta_id' => 7
        ]);

        opcion::Create([
            'descripcion' => "No, Juan is a doctor",
            'correcta' => 0,
            'pregunta_id' => 7
        ]);

        opcion::Create([
            'descripcion' => 'Yes, Juan is a doctor',
            'correcta' => 0,
            'pregunta_id' => 7
        ]);

      //////
        opcion::Create([
            'descripcion' => "Yesnt, Maria is a pupil" ,
            'correcta' => 0,
            'pregunta_id' => 8
        ]);
           opcion::Create([
            'descripcion' => "Yes, is pupil Maria",
            'correcta' => 0,
            'pregunta_id' => 8
        ]);

        opcion::Create([
            'descripcion' => "Yes, isn't pupil Maria",
            'correcta' => 0,
            'pregunta_id' => 8
        ]);
        opcion::Create([
            'descripcion' => 'Yes, Maria is a pupil',
            'correcta' => 1,
            'pregunta_id' => 8
        ]);
        #endregion
    }
}
