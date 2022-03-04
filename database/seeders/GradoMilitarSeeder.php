<?php

namespace Database\Seeders;
use App\Models\GradoMilitar;
use Illuminate\Database\Seeder;

class GradoMilitarSeeder extends Seeder
{

    public function run()
    {
       GradoMilitar::create(['grado'=>'S']);
       GradoMilitar::create(['grado'=>'D']);
       GradoMilitar::create(['grado'=>'C2']);
       GradoMilitar::create(['grado'=>'C1']);
       GradoMilitar::create(['grado'=>'S/2']);
       GradoMilitar::create(['grado'=>'S/1']);
       GradoMilitar::create(['grado'=>'SM3']);
       GradoMilitar::create(['grado'=>'SM2']);
       GradoMilitar::create(['grado'=>'SM1']);
       GradoMilitar::create(['grado'=>'SA']);
       GradoMilitar::create(['grado'=>'SS']);
       GradoMilitar::create(['grado'=>'Tte']);
       GradoMilitar::create(['grado'=>'Ptte']);
       GradoMilitar::create(['grado'=>'Cap']);
       GradoMilitar::create(['grado'=>'May']);
       GradoMilitar::create(['grado'=>'TCNEL']);
       GradoMilitar::create(['grado'=>'Cnel']);
       GradoMilitar::create(['grado'=>'G/B']);
       GradoMilitar::create(['grado'=>'G/D']);
       GradoMilitar::create(['grado'=>'M/G']);
       GradoMilitar::create(['grado'=>'G/J']);
        
    }
}
