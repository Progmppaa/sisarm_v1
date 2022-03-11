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
        Estados::create(['nombre' => 'Amazonas','color'=>'#6A0304']);
        Estados::create(['nombre' => 'Anzoategui','color'=>'#035c6a']);
        Estados::create(['nombre' => 'Apure','color'=>'#e91e63']);
        Estados::create(['nombre' => 'Aragua','color'=>'#9c27b0']);
        Estados::create(['nombre' => 'Barinas','color'=>'#72c4d1']);
        Estados::create(['nombre' => 'Bolivar','color'=>'#f44336']);
        Estados::create(['nombre' => 'Carabobo','color'=>'#673ab7']);
        Estados::create(['nombre' => 'Cojedes','color'=>'#3f51b5']);
        Estados::create(['nombre' => 'Delta Amacuro','color'=>'#2196f3']);
        Estados::create(['nombre' => 'Distrito Capital','color'=>'#03a9f4']);
        Estados::create(['nombre' => 'Falcon','color'=>'#009688']);
        Estados::create(['nombre' => 'Guarico','color'=>'#4caf50']);
        Estados::create(['nombre' => 'Lara','color'=>'#8bc34a']);
        Estados::create(['nombre' => 'Merida','color'=>'#ffeb3b']);
        Estados::create(['nombre' => 'Miranda','color'=>'#ff9800']);
        Estados::create(['nombre' => 'Monagas','color'=>'#ff5722']);
        Estados::create(['nombre' => 'Margarita','color'=>'#795548']);
        Estados::create(['nombre' => 'Portuguesa','color'=>'#607d8b']);
        Estados::create(['nombre' => 'Sucre','color'=>'#3a0431']);
        Estados::create(['nombre' => 'Tachira','color'=>'#06233a']);
        Estados::create(['nombre' => 'Trujillo','color'=>'#e32121']);
        Estados::create(['nombre' => 'La Guaira','color'=>'#21e3e3']);
        Estados::create(['nombre' => 'Yaracuy','color'=>'#125c0a']);
        Estados::create(['nombre' => 'Zulia','color'=>'#6A0304']);
    }
}
