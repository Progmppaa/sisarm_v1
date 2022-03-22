<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros;

class parametrosSeeder extends Seeder
{

    public function run()
    {
        Parametros::create([
            'cargo'=>'Jefe De La Sección De Armas',
            'nombres'=>'Rafael',
            'apellidos'=>'Meléndez Ysea',
            'grado'=>'PTTE',
<<<<<<< HEAD
            'nomenclatura'=>' ',
=======
            'Nomenclatura'=>' ',
>>>>>>> b6e21fe0bf93c278ef23c47784020f060bda84c4
        ]);

        Parametros::create([
            'cargo'=>'Jefe del Departamento de Abastecimiento de Mantenimiento',
            'nombres'=>'José',
            'apellidos'=>'Del Valle Nuñéz Martinez',
            'grado'=>'CAP',
<<<<<<< HEAD
            'nomenclatura'=>' ',
=======
            'Nomenclatura'=>' ',
>>>>>>> b6e21fe0bf93c278ef23c47784020f060bda84c4
        ]);
        Parametros::create([
            'cargo'=>'Jefe del Servicio de Armamento De La Guardia Nacional Bolivariana',
            'nombres'=>'Giacomo',
            'apellidos'=>'Sammito Bertolino',
            'grado'=>'G/B',
<<<<<<< HEAD
            'nomenclatura'=>'GSB',
=======
            'Nomenclatura'=>'GSB',
>>>>>>> b6e21fe0bf93c278ef23c47784020f060bda84c4
        ]);
    }
}
