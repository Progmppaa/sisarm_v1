<?php

namespace Database\Seeders;

use App\Models\Estados;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estados::create(['nombre' => 'Amazonas']);
        Estados::create(['nombre' => 'Anzoategui']);
        Estados::create(['nombre' => 'Apure']);
        Estados::create(['nombre' => 'Aragua']);
        Estados::create(['nombre' => 'Barinas']);
        Estados::create(['nombre' => 'Bolivar']);
        Estados::create(['nombre' => 'Carabobo']);
        Estados::create(['nombre' => 'Cojedes']);
        Estados::create(['nombre' => 'Delta Amacuro']);
        Estados::create(['nombre' => 'Distrito Capital']);
        Estados::create(['nombre' => 'Falcon']);
        Estados::create(['nombre' => 'Guarico']);
        Estados::create(['nombre' => 'Lara']);
        Estados::create(['nombre' => 'Merida']);
        Estados::create(['nombre' => 'Miranda']);
        Estados::create(['nombre' => 'Monagas']);
        Estados::create(['nombre' => 'Margarita']);
        Estados::create(['nombre' => 'Portuguesa']);
        Estados::create(['nombre' => 'Sucre']);
        Estados::create(['nombre' => 'Tachira']);
        Estados::create(['nombre' => 'Trujillo']);
        Estados::create(['nombre' => 'La Guaira']);
        Estados::create(['nombre' => 'Yaracuy']);
        Estados::create(['nombre' => 'Zulia']);
    }
}
