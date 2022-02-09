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
        #region leccion 2
            //Pregunta 1
            opcion::Create([
                'descripcion' => 'Abogado',
                'tipo' => 'imagen',
                'imagen' => 'https://img.icons8.com/external-vitaliy-gorbachev-lineal-color-vitaly-gorbachev/60/000000/external-lawyer-male-profession-vitaliy-gorbachev-lineal-color-vitaly-gorbachev.png',
                'correcta' => 1,
                'pregunta_id' => 5
            ]);
            opcion::Create([
                'descripcion' => 'Enfermera',
                'tipo' => 'imagen',
                'imagen'=> 'https://img.icons8.com/external-vitaliy-gorbachev-flat-vitaly-gorbachev/58/000000/external-nurse-female-profession-vitaliy-gorbachev-flat-vitaly-gorbachev-1.png',
                'correcta' => 0,
                'pregunta_id' => 5
            ]);
            opcion::Create([
                'descripcion' => 'Profesor',
                'imagen' => 'https://img.icons8.com/external-vitaliy-gorbachev-lineal-color-vitaly-gorbachev/60/000000/external-teacher-online-learning-vitaliy-gorbachev-lineal-color-vitaly-gorbachev.png',
                'tipo' => 'imagen',
                'correcta' => 0,
                'pregunta_id' => 5
            ]);
            //Fin Pregunta 1

                  //Pregunta 2
                  opcion::Create([
                    'descripcion' => 'Ingeniero',
                    'tipo' => 'imagen',
                    'imagen' => 'https://img.icons8.com/external-vitaliy-gorbachev-lineal-color-vitaly-gorbachev/60/000000/external-engineer-female-profession-vitaliy-gorbachev-lineal-color-vitaly-gorbachev.png',
                    'correcta' => 0,
                    'pregunta_id' => 6
                ]);
                opcion::Create([
                    'descripcion' => 'Bombero',
                    'tipo' => 'imagen',
                    'imagen'=> 'https://img.icons8.com/external-vitaliy-gorbachev-lineal-color-vitaly-gorbachev/60/000000/external-fireman-male-profession-vitaliy-gorbachev-lineal-color-vitaly-gorbachev.png',
                    'correcta' => 1,
                    'pregunta_id' => 6
                ]);
                opcion::Create([
                    'descripcion' => 'Cartero',
                    'imagen' => 'https://img.icons8.com/external-itim2101-lineal-color-itim2101/64/000000/external-postman-male-occupation-avatar-itim2101-lineal-color-itim2101.png',
                    'tipo' => 'imagen',
                    'correcta' => 0,
                    'pregunta_id' => 6
                ]);
                //Fin Pregunta 2

                  //Pregunta 3
                  opcion::Create([
                    'descripcion' => 'Secretaria',
                    'tipo' => 'imagen',
                    'imagen' => 'https://img.icons8.com/external-justicon-lineal-color-justicon/64/000000/external-secretary-avatar-and-occupation-justicon-lineal-color-justicon.png',
                    'correcta' => 0,
                    'pregunta_id' => 7
                ]);
                opcion::Create([
                    'descripcion' => 'Bombero',
                    'tipo' => 'imagen',
                    'imagen'=> 'https://img.icons8.com/external-vitaliy-gorbachev-lineal-color-vitaly-gorbachev/60/000000/external-fireman-male-profession-vitaliy-gorbachev-lineal-color-vitaly-gorbachev.png',
                    'correcta' => 0,
                    'pregunta_id' => 7
                ]);
                opcion::Create([
                    'descripcion' => 'Cantante',
                    'imagen' => 'https://img.icons8.com/external-vitaliy-gorbachev-lineal-color-vitaly-gorbachev/60/000000/external-singer-female-profession-vitaliy-gorbachev-lineal-color-vitaly-gorbachev.png',
                    'tipo' => 'imagen',
                    'correcta' => 1,
                    'pregunta_id' => 7
                ]);
                //Fin Pregunta 3

                    //Pregunta 4
                    opcion::Create([
                        'descripcion' => 'Verde',
                        'tipo' => 'color',
                        'color' => 'Green',
                        'correcta' => 1,
                        'pregunta_id' => 8
                    ]);
                    opcion::Create([
                        'descripcion' => 'Azul',
                        'tipo' => 'color',
                        'color' => 'Blue',
                        'correcta' => 0,
                        'pregunta_id' => 8
                    ]);
                    opcion::Create([
                        'descripcion' => 'Violeta',
                        'tipo' => 'color',
                        'color' => 'Violet',
                        'correcta' => 0,
                        'pregunta_id' => 8
                    ]);
                    //Fin Pregunta 4
        #endregion
    }
}
