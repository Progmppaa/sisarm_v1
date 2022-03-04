<?php

namespace Database\Seeders;
use App\Models\Accesorios;
use Illuminate\Database\Seeder;

class AccesoriosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Accesorios::create(['descripcion'=>'PISTOLA DE DOBLE ACCION']);
        Accesorios::create(['descripcion'=>' CONO REFORZADOR DE AMETRALLADORA DE APOYO GENERAL, MARCA FN, MODELO M-61 CALIBRE 7,62X51mm']);
        Accesorios::create(['descripcion'=>' CONO REFORZADOR DE AMETRALLADORA DE INFANTERIA, MARCA FN, MODELO MINIMI, 5,56X45mm']);
        Accesorios::create(['descripcion'=>' CONO REFORZADOR DE FUSIL AUTOMATICO LIVIANO, MARCA FN, CALIBRE 7,62X51mm']);
        Accesorios::create(['descripcion'=>' CONO REFORZADOR DE FUSIL DE ASALTO MARCA KALASHNIKOV, MODELO AK-103, CALIBRE 7,62X39mm']);
        Accesorios::create(['descripcion'=>' KIT DE MANTENIMIENTO DE FUSIL FRANCO TIRADOR MARCA DRAGUNOV MODELO SVD CALIBRE 7,62X54mm']);
        Accesorios::create(['descripcion'=>' KIT DE MANTENIMIENTO DE FUSIL DE ASALTO MARCA KALASHNIKOV, MODELO AK-103, CALIBRE 7,62X39mm']);
        Accesorios::create(['descripcion'=>' LLENA CARGADOR DE FUSIL AUTOMATICO LIVIANO, MARCA FN, CALIBRE 7,62X51mm']);
        Accesorios::create(['descripcion'=>' LLENA CARGADOR DE SUB-AMETRALLADORA, MODELO UZI, CALIBRE 9X19mm']);
        Accesorios::create(['descripcion'=>' MAQUINA ESLABONADORA DE MUNICIÓN CALIBRE 12,7X99mm.(.50)']);
        Accesorios::create(['descripcion'=>' MAQUINA ESLABONADORA DE MUNICIÓN CALIBRE 7,62X51mm']);
        Accesorios::create(['descripcion'=>' PORTA FUSIL DE FUSIL FRANCO TIRADOR MARCA DRAGUNOV MODELO SVD CALIBRE 7,62X54mm']);
        Accesorios::create(['descripcion'=>' PORTA FUSIL DE FUSIL DE ASALTO MARCA KALASHNIKOV, MODELO AK-103, CALIBRE 7,62X39mm']);
        Accesorios::create(['descripcion'=>' PORTA CARGADOR DE FUSIL FRANCO TIRADOR MARCA DRAGUNOV MODELO SVD CALIBRE 7,62X54mm']);
        Accesorios::create(['descripcion'=>' PORTA CARGADOR DE FUSIL DE ASALTO MARCA KALASHNIKOV, MODELO AK-103, CALIBRE 7,62X39mm']);
        Accesorios::create(['descripcion'=>' CORREA PORTA RPG-7V1']);
        Accesorios::create(['descripcion'=>' MORRAL PORTA GRANADAS RPG-7V1']);
        Accesorios::create(['descripcion'=>' MORRAL PORTA RPG-7V1']);
        Accesorios::create(['descripcion'=>' TAPAS PROTECTORAS DE LONA PARA EL VENTURI Y EL TUBO CAÑON']);
        Accesorios::create(['descripcion'=>' ACEITE LUBRICANTE DE ARMAS NYCOLUBE 127 EN SPRAY EN BOTELLAS']);
        Accesorios::create(['descripcion'=>' ACEITE LUBRICANTE DE ARMAS NYCOLUBE 127 EN CUÑETE DE LATA']);

    }
}
