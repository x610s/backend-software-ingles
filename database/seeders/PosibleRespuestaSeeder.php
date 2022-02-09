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

         #region posibles respuestas leccion 3

         //a
         posiblerespuesta::Create([
            'descripcion' => 'a'
            ,'pregunta_id' => '17'
        ]);
        posiblerespuesta::Create([
            'descripcion' => 'ei'
            ,'pregunta_id' => '17'
        ]);
        posiblerespuesta::Create([
            'descripcion' => 'hei'
            ,'pregunta_id' => '17'
        ]);
        posiblerespuesta::Create([
            'descripcion' => 'hey'
            ,'pregunta_id' => '17'
        ]);


        //b
        posiblerespuesta::Create([
            'descripcion' => "b"
            ,'pregunta_id' => '18'
        ]);
        posiblerespuesta::Create([
            'descripcion' => "be"
            ,'pregunta_id' => '18'
        ]);
        posiblerespuesta::Create([
            'descripcion' => "bee"
            ,'pregunta_id' => '18'
        ]);
        posiblerespuesta::Create([
            'descripcion' => "vi"
            ,'pregunta_id' => '18'
        ]);
        posiblerespuesta::Create([
            'descripcion' => "ví"
            ,'pregunta_id' => '18'
        ]);
        posiblerespuesta::Create([
            'descripcion' => "beat"
            ,'pregunta_id' => '18'
        ]);


        //C
        posiblerespuesta::Create([
            'descripcion' => "c"
            ,'pregunta_id' => '19'
        ]);
        posiblerespuesta::Create([
            'descripcion' => "si"
            ,'pregunta_id' => '19'
        ]);
        posiblerespuesta::Create([
            'descripcion' => "sí"
            ,'pregunta_id' => '19'
        ]);
        posiblerespuesta::Create([
            'descripcion' => "see"
            ,'pregunta_id' => '19'
        ]);
        posiblerespuesta::Create([
            'descripcion' => "ci"
            ,'pregunta_id' => '19'
        ]);
        posiblerespuesta::Create([
            'descripcion' => "zy"
            ,'pregunta_id' => '19'
        ]);
        #endregion
    }
}
