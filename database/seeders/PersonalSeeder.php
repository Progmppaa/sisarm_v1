<?php

namespace Database\Seeders;

use App\Models\Personas;
use Illuminate\Database\Seeder;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Personas::create([
            'CI'=>'22222222', 
            'nombres'=>'Yulimar',
            'apellidos'=>'Dominguez',
            'Fe_nac'=>'02/08/1993',
            'grado'=>'sargento',
            'dependencia'=>'comando',
            'destacamento'=>'DA-1',
            'compania'=>'guaro',
            'telefono'=>'02124401789',
            'nro_carnet'=>'0201',
            'promo'=>'DHUI'
        ]);
        Personas::create([
            'CI'=>'23333333', 
            'nombres'=>'Pedro',
            'apellidos'=>'Alvarez',
            'Fe_nac'=>'02/08/1993',
            'grado'=>'sargento',
            'dependencia'=>'comando',
            'destacamento'=>'DA-1',
            'compania'=>'guaro',
            'telefono'=>'02124401789',
            'nro_carnet'=>'0201',
            'promo'=>'DHUI'
            ]);
        Personas::create([
            'CI'=>'24444444', 
            'nombres'=>'Gabriela',
            'apellidos'=>'Sandia',
            'Fe_nac'=>'02/08/1993',
            'grado'=>'sargento',
            'dependencia'=>'comando',
            'destacamento'=>'DA-1',
            'compania'=>'guaro',
            'telefono'=>'02124401789',
            'nro_carnet'=>'0201',
            'promo'=>'DHUI'
            ]);
        Personas::create([
            'CI'=>'25555555', 
            'nombres'=>'Gabriel',
            'apellidos'=>'Gonzalez',
            'Fe_nac'=>'02/08/1993',
            'grado'=>'sargento',
            'dependencia'=>'comando',
            'destacamento'=>'DA-1',
            'compania'=>'guaro',
            'telefono'=>'02124401789',
            'nro_carnet'=>'0201',
            'promo'=>'DHUI'
        ]);
    }
}
