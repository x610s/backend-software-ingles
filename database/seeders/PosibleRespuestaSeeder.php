<?php

namespace Database\Seeders;

use App\Models\posiblerespuesta;
use Illuminate\Database\Seeder;

class PosibleRespuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #region posibles respuestas leccion 1
        posiblerespuesta::Create([
            'descripcion' => 'No, this is not the telephone'
            ,'pregunta_id' => '3'
        ]);

        posiblerespuesta::Create([
            'descripcion' => 'No, this isnt the telephone'
            ,'pregunta_id' => '3'
        ]);
        posiblerespuesta::Create([
            'descripcion' => "No, this isn't the telephone"
            ,'pregunta_id' => '3'
        ]);
        #endregion

         #region posibles respuestas leccion 2
         posiblerespuesta::Create([
            'descripcion' => 'No, She is not an architecte'
            ,'pregunta_id' => '6'
        ]);

        posiblerespuesta::Create([
            'descripcion' => "No, She isn't an architecte"
            ,'pregunta_id' => '6'
        ]);
        posiblerespuesta::Create([
            'descripcion' => "No, she isnt an architecte"
            ,'pregunta_id' => '6'
        ]);
        #endregion

    }
}
