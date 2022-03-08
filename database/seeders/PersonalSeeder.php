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
            'grado'=>'sargento',
            'dependencia'=>'comando',
            'destacamento'=>'DA-1',
            'compania'=>'guaro',
            'telefono'=>'02124401789',
        ]);
        Personas::create([
            'CI'=>'23333333', 
            'nombres'=>'Pedro',
            'apellidos'=>'Alvarez',
            'dependencia'=>'comando',
            'destacamento'=>'DA-1',
            'compania'=>'guaro',
            'telefono'=>'02124401789',
            ]);
        Personas::create([
            'CI'=>'24444444', 
            'nombres'=>'Gabriela',
            'apellidos'=>'Sandia',
            'dependencia'=>'comando',
            'destacamento'=>'DA-1',
            'compania'=>'guaro',
            'telefono'=>'02124401789',
            ]);
        Personas::create([
            'CI'=>'25555555', 
            'nombres'=>'Gabriel',
            'apellidos'=>'Gonzalez',
            'dependencia'=>'comando',
            'destacamento'=>'DA-1',
            'compania'=>'guaro',
            'telefono'=>'02124401789',
        ]);
    }
}
