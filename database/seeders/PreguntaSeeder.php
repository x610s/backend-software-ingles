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
            'descripcion' => 'Am i a teacher?',
            'requerimiento' => 'Responda la frase en positivo',
            'respuesta' => 'Yes, you are a teacher'
            ,'orden' => 1,
             'tipo' => 1,
            'leccion_id' => 2
        ]);

        pregunta::Create([
            'descripcion' => 'Is Susan an architecte?',
            'requerimiento' => 'Responda la frase en negativo',
            'respuesta' => ''
            ,'orden' => 1,
             'tipo' => 2,
            'leccion_id' => 2
        ]);
        #endregion

        #region Nivel 1 leccion 3
        pregunta::Create([
            'descripcion'=> 'Is Juan a doctor?',
            'requerimiento' => 'Responder en negativo',
            'respuesta' => ''
            ,'orden' => 1,
             'tipo' => 3,
            'leccion_id' => 3
        ]);

        pregunta::Create([
            'descripcion' => 'Is Maria a pupil?',
            'requerimiento' => 'Responder en positivo',
            'respuesta' => ''
            ,'orden' => 1,
             'tipo' => 3,
            'leccion_id' => 3
        ]);
        #endregion
    }
}
