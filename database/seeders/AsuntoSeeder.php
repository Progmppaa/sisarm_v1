<?php

namespace Database\Seeders;

use App\Models\Asunto;
use Illuminate\Database\Seeder;

class AsuntoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Asunto::create([
            'nombre'=>'DOTACIÓN ORGÁNICA',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'ASIGNACIÓN',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'REEMPLAZO',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'REPARACIÓN',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'MISIÓN DE ESTUDIOS',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'DESINCORPORACIÓN',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'REINTEGRO',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'DEVOLUCIÓN',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'OTROS',
            'nota'=>''
        ]);
    }
}
