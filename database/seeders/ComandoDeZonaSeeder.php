<?php

namespace Database\Seeders;

use App\Models\ComandoDeZona;
use Illuminate\Database\Seeder;

class ComandoDeZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ComandoDeZona::create([
            'nombre'=>'PUESTO CMDO',
            'id_estado'=>'10',
            'descripcion'=>'EDO. MAYOR'
        ]);
    }
}
