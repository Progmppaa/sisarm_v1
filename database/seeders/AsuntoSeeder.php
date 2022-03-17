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
            'nomenclatura'=>'DO',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'ASIGNACIÓN',
            'nomenclatura'=>'A',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'REEMPLAZO',
            'nomenclatura'=>'REEM',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'REPARACIÓN',
            'nomenclatura'=>'REPA',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'MISIÓN DE ESTUDIOS',
            'nomenclatura'=>'ME',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'DESINCORPORACIÓN',
            'nomenclatura'=>'DESIN',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'REINTEGRO',
            'nomenclatura'=>'REIN',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'DEVOLUCIÓN',
            'nomenclatura'=>'DEVO',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'ASIGNACIÓN A UNIDADES',
            'nomenclatura'=>'AU',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'REINTEGRO POR BAJA',
            'nomenclatura'=>'RB',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'SOLVENCIA DE ARMAMENTOS',
            'nomenclatura'=>'SA',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'CONSTANCIA DE NO POSEER ARMAMENTOS',
            'nomenclatura'=>'CA',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'DEPOSITO MISIÓN DE ESTUDIO',
            'nomenclatura'=>'DME',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'REINTEGRO MISIÓN DE ESTUDIO',
            'nomenclatura'=>'RME',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'PLANILLA DE MOVIMIENTO DE DOTACIÓN DE MUNICIONES',
            'nomenclatura'=>'PMDM',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'PLANILLA DE MOVIMIENTO DE MATERIAL DOTADO',
            'nomenclatura'=>'PMMD',
            'nota'=>''
        ]); Asunto::create([
            'nombre'=>'REINTEGRO DESINCORPORACIÓN DE UNIDADES',
            'nomenclatura'=>'RDU',
            'nota'=>''
        ]); Asunto::create([
            'nombre'=>'MUNICIONES (MOVIMIENTO INTERNO DE MATERIAL DE GUERRA)',
            'nomenclatura'=>'MUN',
            'nota'=>''
        ]); Asunto::create([
            'nombre'=>'PLANILLA DE REINTEGRO VARIOS',
            'nomenclatura'=>'PRV',
            'nota'=>''
        ]); Asunto::create([
            'nombre'=>'ARMAS EN REPARACIÓN',
            'nomenclatura'=>'AREP',
            'nota'=>''
        ]); Asunto::create([
            'nombre'=>'ARMAS DEVUELTAS QUE SE ENCONTRABAN EN REPARACIÓN',
            'nomenclatura'=>'ADRE',
            'nota'=>''
        ]); Asunto::create([
            'nombre'=>'PLANILLA DE DOTACIÓN DE EXPLOSIVOS',
            'nomenclatura'=>'PDEX',
            'nota'=>''
        ]);

        Asunto::create([
            'nombre'=>'PLANILLA DE MATERIAL PRESTADO',
            'nomenclatura'=>'PMP',
            'nota'=>''
        ]);
         Asunto::create([
            'nombre'=>'PLANILLA DE REINTEGRO DE MATERIAL PRESTADO',
            'nomenclatura'=>'PRP',
            'nota'=>''
        ]);
         Asunto::create([
            'nombre'=>'RECIBO DE MUNICIONES',
            'nomenclatura'=>'RM',
            'nota'=>''
        ]);
        Asunto::create([
            'nombre'=>'RECIBO DE ACCESORIOS',
            'nomenclatura'=>'RA',
            'nota'=>''
        ]);
    
        Asunto::create([
            'nombre'=>'OTROS',
            'nomenclatura'=>'OTROS',
            'nota'=>''
        ]);
    }
}
