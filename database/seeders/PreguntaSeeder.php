<?php

namespace Database\Seeders;

use App\Models\leccion;
use App\Models\pregunta;
use Illuminate\Database\Seeder;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #region Nivel 1 leccion 1
        pregunta::Create([
            'descripcion' => 'This is a laptop',
            'requerimiento' => 'Cambia la frase a pregunta',
            'respuesta' => 'Is this a Laptop?'
            ,'orden' => 1,
             'tipo' => 1,
            'leccion_id' => 1
        ]);

        pregunta::Create([
            'descripcion' => '___ __ _ CD',
            'requerimiento' => 'Complete la frase (Este es un CD)',
            'respuesta' => 'This is a CD'
            ,'orden' => 2,
             'tipo' => 1,
            'leccion_id' => 1
        ]);

        pregunta::Create([
            'descripcion' => 'Is this the telephone?',
            'requerimiento' => 'Cambie la frase a negativo',
            'respuesta' => ''
            ,'orden' => 3,
             'tipo' => 2,
            'leccion_id' => 1
        ]);

        pregunta::Create([
            'descripcion' => '___ __ _ house',
            'requerimiento' => 'Complete la frase (Esta es una casa)'
            ,'respuesta' => 'This is a house'
            ,'orden' => 4,
             'tipo' => 1,
            'leccion_id' => 1
        ]);

        #endregion

        #region Nivel 1 leccion 2
        pregunta::Create([
            'descripcion' => '¿Cuál de estos es "Lawyer"?',
            'requerimiento' => '',
            'respuesta' => 'Abogado'
            ,'orden' => 1,
             'tipo' => 3,
            'leccion_id' => 2
        ]);

        pregunta::Create([
            'descripcion' => '¿Cuál de estos es "Fireman"?',
            'requerimiento' => '',
            'respuesta' => 'Bombero'
            ,'orden' => 1,
             'tipo' => 3,
            'leccion_id' => 2
        ]);

        pregunta::Create([
            'descripcion' => '¿Cuál de estos es "Singer"?',
            'requerimiento' => '',
            'respuesta' => 'Cantante'
            ,'orden' => 1,
             'tipo' => 3,
            'leccion_id' => 2
        ]);

        pregunta::Create([
            'descripcion' => '¿Cuál de estos es "Green"?',
            'requerimiento' => '',
            'respuesta' => 'Verde'
            ,'orden' => 1,
             'tipo' => 3,
            'leccion_id' => 2
        ]);
        #endregion

        #region Nivel 1 leccion 3
         pregunta::Create([
            'descripcion' => 'Escribe el siguiente número en letras  "25"',
            'requerimiento' => 'En ingles',
            'respuesta' => 'Twenty Five'
            ,'orden' => 1,
             'tipo' => 1,
            'leccion_id' => 3
        ]);

        pregunta::Create([
            'descripcion' => 'Escribe lo siguiente en número "Thirty eight"',
            'requerimiento' => 'En número',
            'respuesta' => '38'
            ,'orden' => 1,
             'tipo' => 1,
            'leccion_id' => 3
        ]);

        pregunta::Create([
            'descripcion' => 'Escribe el siguiente número en letras  "115"',
            'requerimiento' => 'En ingles',
            'respuesta' => 'One Hundred fifteen'
            ,'orden' => 1,
             'tipo' => 1,
            'leccion_id' => 3
        ]);

        pregunta::Create([
            'descripcion' => 'Escribe lo siguiente en número "Nine Hundred Thirty Five"',
            'requerimiento' => 'En número',
            'respuesta' => '935'
            ,'orden' => 1,
             'tipo' => 1,
            'leccion_id' => 3
        ]);

        pregunta::Create([
            'descripcion' => 'Escribe lo siguiente en número en letras  "3.468"',
            'requerimiento' => 'En ingles',
            'respuesta' => 'three thousand four hundred sixty eight'
            ,'orden' => 1,
             'tipo' => 1,
            'leccion_id' => 3
        ]);

        pregunta::Create([
            'descripcion' => 'Escribe lo siguiente en número "Nine Hundred Thousand"',
            'requerimiento' => 'En número',
            'respuesta' => '900000'
            ,'orden' => 1,
             'tipo' => 1,
            'leccion_id' => 3
        ]);

        //Audio Question
        pregunta::Create([
            'descripcion' => 'Pronuncia siguiente número "100"',
            'requerimiento' => 'En ingles',
            'respuesta' => '100'
            ,'orden' => 1,
             'tipo' => 4,
            'leccion_id' => 3
        ]);

        pregunta::Create([
            'descripcion' => 'Pronuncia siguiente número "2000"',
            'requerimiento' => 'En ingles',
            'respuesta' => '2000'
            ,'orden' => 1,
             'tipo' => 4,
            'leccion_id' => 3
        ]);

        pregunta::Create([
            'descripcion' => 'Pronuncia la siguiente letra "A"',
            'requerimiento' => 'En ingles',
            'respuesta' => ''
            ,'orden' => 1,
             'tipo' => 5,
            'leccion_id' => 3
        ]);

        pregunta::Create([
            'descripcion' => 'Pronuncia la siguiente letra "B"',
            'requerimiento' => 'En ingles',
            'respuesta' => ''
            ,'orden' => 1,
             'tipo' => 5,
            'leccion_id' => 3
        ]);

        pregunta::Create([
            'descripcion' => 'Pronuncia la siguiente letra "C"',
            'requerimiento' => 'En ingles',
            'respuesta' => ''
            ,'orden' => 1,
             'tipo' => 5,
            'leccion_id' => 3
        ]);
        #endregion
    }
}
