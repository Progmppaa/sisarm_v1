<?php

namespace Database\Seeders;

use App\Models\Compania;
use Illuminate\Database\Seeder;

class CompaniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Compania::create([
            'nombre'=>'1RA. CIA',
            'id_destacamento'=>'1',
            'descripcion'=>'SER. GENERAL'
        ]);
        Compania::create([
            'nombre'=>'2DA. CIA',
            'id_destacamento'=>'1',
            'descripcion'=>'DEPENDENCIAS'
        ]);
        Compania::create([
            'nombre'=>'3RA. CIA',
            'id_destacamento'=>'1',
            'descripcion'=>'ESCOLTA'
        ]);
        Compania::create([
            'nombre'=>'4TA. CIA',
            'id_destacamento'=>'1',
            'descripcion'=>'ALISTADOS'
        ]);
        Compania::create([
            'nombre'=>'1RA. CIA',
            'id_destacamento'=>'2',
            'descripcion'=>'SER. GENERAL'
        ]);
        Compania::create([
            'nombre'=>'2DA. CIA',
            'id_destacamento'=>'2',
            'descripcion'=>'TRANSPORTE'
        ]);
        Compania::create([
            'nombre'=>'3RA. CIA',
            'id_destacamento'=>'2',
            'descripcion'=>'INTENDENCIA'
        ]);
        Compania::create([
            'nombre'=>'4TA. CIA',
            'id_destacamento'=>'2',
            'descripcion'=>'CABISOGUARNAC'
        ]);
        Compania::create([
            'nombre'=>'1RA. CIA',
            'id_destacamento'=>'3',
            'descripcion'=>'C.S. ESTADO'
        ]);
        Compania::create([
            'nombre'=>'2DA. CIA',
            'id_destacamento'=>'3',
            'descripcion'=>'PRES. DE LA REP.'
        ]);
        Compania::create([
            'nombre'=>'3RA. CIA',
            'id_destacamento'=>'3',
            'descripcion'=>'ENTE GUBERNA'
        ]);
        Compania::create([
            'nombre'=>'4TA. CIA',
            'id_destacamento'=>'3',
            'descripcion'=>'INST PUB'
        ]);
        Compania::create([
            'nombre'=>'5TA. CIA',
            'id_destacamento'=>'3',
            'descripcion'=>'AUTO. MILITARES'
        ]);
    }
}
