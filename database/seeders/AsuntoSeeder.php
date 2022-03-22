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
            'siglas_doc'=>'DO',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]);
        Asunto::create([
            'nombre'=>'ASIGNACIÓN',
            'siglas_doc'=>'A',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]);
        Asunto::create([
            'nombre'=>'REEMPLAZO',
            'siglas_doc'=>'REEM',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]);
        Asunto::create([
            'nombre'=>'REPARACIÓN',
            'siglas_doc'=>'REPA',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]);
        Asunto::create([
            'nombre'=>'MISIÓN DE ESTUDIOS',
            'siglas_doc'=>'ME',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]);
        Asunto::create([
            'nombre'=>'DESINCORPORACIÓN',
            'siglas_doc'=>'DESIN',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]);
        Asunto::create([
            'nombre'=>'REINTEGRO',
            'siglas_doc'=>'REIN',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]);
        Asunto::create([
            'nombre'=>'DEVOLUCIÓN',
            'siglas_doc'=>'DEVO',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]);
        Asunto::create([
            'nombre'=>'ASIGNACIÓN A UNIDADES',
            'siglas_doc'=>'AU',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]);
        Asunto::create([
            'nombre'=>'REINTEGRO POR BAJA',
            'siglas_doc'=>'RB',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]);
        Asunto::create([
            'nombre'=>'SOLVENCIA DE ARMAMENTOS',
            'siglas_doc'=>'SA',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]);
        Asunto::create([
            'nombre'=>'CONSTANCIA DE NO POSEER ARMAMENTOS',
            'siglas_doc'=>'CA',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]);
        Asunto::create([
            'nombre'=>'DEPOSITO MISIÓN DE ESTUDIO',
            'siglas_doc'=>'DME',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]);
        Asunto::create([
            'nombre'=>'REINTEGRO MISIÓN DE ESTUDIO',
            'siglas_doc'=>'RME',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]);
        Asunto::create([
            'nombre'=>'PLANILLA DE MOVIMIENTO DE DOTACIÓN DE MUNICIONES',
            'siglas_doc'=>'PMDM',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]);
        Asunto::create([
            'nombre'=>'PLANILLA DE MOVIMIENTO DE MATERIAL DOTADO',
            'siglas_doc'=>'PMMD',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]); Asunto::create([
            'nombre'=>'REINTEGRO DESINCORPORACIÓN DE UNIDADES',
            'siglas_doc'=>'RDU',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]); Asunto::create([
            'nombre'=>'MUNICIONES (MOVIMIENTO INTERNO DE MATERIAL DE GUERRA)',
            'siglas_doc'=>'MUN',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]); Asunto::create([
            'nombre'=>'PLANILLA DE REINTEGRO VARIOS',
            'siglas_doc'=>'PRV',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]); Asunto::create([
            'nombre'=>'ARMAS EN REPARACIÓN',
            'siglas_doc'=>'AREP',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]); Asunto::create([
            'nombre'=>'ARMAS DEVUELTAS QUE SE ENCONTRABAN EN REPARACIÓN',
            'siglas_doc'=>'ADRE',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]); Asunto::create([
            'nombre'=>'PLANILLA DE DOTACIÓN DE EXPLOSIVOS',
            'siglas_doc'=>'PDEX',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]);

        Asunto::create([
            'nombre'=>'PLANILLA DE MATERIAL PRESTADO',
            'siglas_doc'=>'PMP',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]);
         Asunto::create([
            'nombre'=>'PLANILLA DE REINTEGRO DE MATERIAL PRESTADO',
            'siglas_doc'=>'PRP',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]);
         Asunto::create([
            'nombre'=>'RECIBO DE MUNICIONES',
            'siglas_doc'=>'RM',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]);
        Asunto::create([
            'nombre'=>'RECIBO DE ACCESORIOS',
            'siglas_doc'=>'RA',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]);
    
        Asunto::create([
            'nombre'=>'OTROS',
            'siglas_doc'=>'OTROS',
            'nota'=>'SERÁ OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVÍE EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN'
        ]);
    }
}
