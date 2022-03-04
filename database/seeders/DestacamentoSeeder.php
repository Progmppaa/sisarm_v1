<?php

namespace Database\Seeders;

use App\Models\Destacamento;
use Illuminate\Database\Seeder;

class DestacamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Destacamento::create([
            'nombre'=>'DA-1',
            'id_comando'=>'1',
            'descripcion'=>''
        ]);
        Destacamento::create([
            'nombre'=>'DA-2',
            'id_comando'=>'1',
            'descripcion'=>''
        ]);
        Destacamento::create([
            'nombre'=>'DA-3',
            'id_comando'=>'1',
            'descripcion'=>''
        ]);
    }
}
