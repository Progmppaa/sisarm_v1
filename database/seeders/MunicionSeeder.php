<?php

namespace Database\Seeders;
use App\Models\Municiones;
use Illuminate\Database\Seeder;

class MunicionSeeder extends Seeder
{
    public function run()
    {
        Municiones::create(['cod'=>'AT4-1', 'descripcion'=>'GRANADA ANTI TANQUE CALIBRE 84mm. (AT-4)']);
        Municiones::create(['cod'=>'AT4-2', 'descripcion'=>'GRANADA DOBLE PROPOSITO CALIBRE 84mm. (AT-4 DP) ']);
        Municiones::create(['cod'=>'MD-10', 'descripcion'=>'GRANADA DE MORTERO CALIBRE 81mm. (HE)']);
        Municiones::create(['cod'=>'MD-9', 'descripcion'=>'GRANADA DE MORTERO CALIBRE 81mm. (HE-ROMPEDORA)']);
        Municiones::create(['cod'=>'MD-8', 'descripcion'=>'GRANADA DE MORTERO CALIBRE 81mm. (ILUMINANTES)']);
        Municiones::create(['cod'=>'MD-7', 'descripcion'=>'GRANADA DE MORTERO CALIBRE 81mm. (FUMIGENA)']);
        Municiones::create(['cod'=>'MD-6', 'descripcion'=>'GRANADA DE MORTERO CALIBRE 81mm. (EJERCICIO)']);
        Municiones::create(['cod'=>'KGM-1', 'descripcion'=>'KIT DE GRANADA DE MORTERO CALIBRE 81mm.']);
        Municiones::create(['cod'=>'MD-2', 'descripcion'=>'GRANADA DE MORTERO CALIBRE 60mm. (HE)']);
        Municiones::create(['cod'=>'MD-3', 'descripcion'=>'GRANADA DE MORTERO CALIBRE 60mm. (HE-ROMPEDORA)']);
        Municiones::create(['cod'=>'MD-4', 'descripcion'=>'GRANADA DE MORTERO CALIBRE 60mm. (ILUMINANTE)']);
        Municiones::create(['cod'=>'MD-5', 'descripcion'=>'GRANADA DE MORTERO CALIBRE 60mm. (FUMIGENA)']);
        Municiones::create(['cod'=>'MD-1', 'descripcion'=>'GRANADA DE MORTERO CALIBRE 60mm. (TP-RS DE EJERCICIO)']);
        Municiones::create(['cod'=>'KGM-2', 'descripcion'=>'KIT DE GRANADA DE MORTERO CALIBRE 60mm.']);
        Municiones::create(['cod'=>'GM-1', 'descripcion'=>'GRANADA  DE AMETRALLADORA CALIBRE  40X53mm.  (HEDP-HV)']);
        Municiones::create(['cod'=>'MB-1', 'descripcion'=>'GRANADA DE LANZADOR M203-PI. 40X46mm. (HEDP-LV) ']);
        Municiones::create(['cod'=>'PG-3', 'descripcion'=>'GRANADA A/P. THERMOBARICA MDO. TGB-7V DE RGP-7V CALIBRE 40mm.']);
        Municiones::create(['cod'=>'PG-1', 'descripcion'=>'GRANADA A/T. TANDEM MDO. NR7BP PG-7VR DE RPG-7V DE CALIBRE 40mm.']);
        Municiones::create(['cod'=>'PG-4', 'descripcion'=>'GRANADA A/P. OR-7V FRAGMENTARIA MDO.OG-7V DE RPG-7V DE CALIBRE 40mm.']);
        Municiones::create(['cod'=>'PG-2', 'descripcion'=>'GRANADA A/T. NR-7BR SHAPED MDO. PG-7VL DE RPG-7V DE CALIBRE 40mm.']);
        Municiones::create(['cod'=>'CPM', 'descripcion'=>'CARTUCHO PRIMARIO PARA MORTERO CALIBRE 60mm.']);
        Municiones::create(['cod'=>'CSI', 'descripcion'=>'CARTUCHO CALIBRE 26,5mm. (ILUMINANTE)']);
        Municiones::create(['cod'=>'MA-32', 'descripcion'=>'CARTUCHO CALIBRE 12 (PLOMO N°4)']);
        Municiones::create(['cod'=>'MA-33', 'descripcion'=>'CARTUCHO CALIBRE 12 (PLOMO Nº 6)']);
        Municiones::create(['cod'=>'MA-34', 'descripcion'=>'CARTUCHO CALIBRE 12 (PLOMO Nº 7 1/2)']);
        Municiones::create(['cod'=>'MA-35', 'descripcion'=>'CARTUCHO CALIBRE 12 (PLOMO Nº 8)']);
        Municiones::create(['cod'=>'MA-36', 'descripcion'=>'CARTUCHO CALIBRE 12 (PLOMO Nº 9)']);
        Municiones::create(['cod'=>'MA-37', 'descripcion'=>'CARTUCHO CALIBRE 12,7X99mm. INCENDIARIA']);
        Municiones::create(['cod'=>'MA-38', 'descripcion'=>'CARTUCHO CALIBRE 12,7X99mm. PERFORANTE']);
        Municiones::create(['cod'=>'MA-19', 'descripcion'=>'CARTUCHO CALIBRE 12,7X99mm. (4 BALAS POR UN TRAZ.ESLABONADO) ']);
        Municiones::create(['cod'=>'MA-17', 'descripcion'=>'CARTUCHO CALIBRE 12,7X99mm. (3B-1T-1APEI ESLABONADO)']);
        Municiones::create(['cod'=>'MA-24', 'descripcion'=>'CARTUCHO CALIBRE 12,7X99mm. (APEI)']);
        Municiones::create(['cod'=>'MA-18', 'descripcion'=>'CARTUCHO CALIBRE 12,7X99mm. (APIT)']);
        Municiones::create(['cod'=>'MA-23', 'descripcion'=>'CARTUCHO CALIBRE 12,7X99mm. (BALA)']);
        Municiones::create(['cod'=>'MA-30', 'descripcion'=>'CARTUCHO CALIBRE 12,7X99mm. (FOGUEO)']);
        Municiones::create(['cod'=>'MA-31', 'descripcion'=>'CARTUCHO CALIBRE 9X19mm. (BALA HE)']);
        Municiones::create(['cod'=>'MA-4', 'descripcion'=>'CARTUCHO CALIBRE 9X19mm. (BALA)']);
        Municiones::create(['cod'=>'MA-1', 'descripcion'=>'CARTUCHO CALIBRE 7,65X17mm. (BALA)']);
        Municiones::create(['cod'=>'MA-21', 'descripcion'=>'CARTUCHO CALIBRE 7,62X57mm. (BALA)']);
        Municiones::create(['cod'=>'MA-22', 'descripcion'=>'CARTUCHO CALIBRE 7X57mm. (FOGUEO)']);
        Municiones::create(['cod'=>'MA-14', 'descripcion'=>'CARTUCHO CALIBRE 7,62X54mm. (7N1)']);
        Municiones::create(['cod'=>'MA-15', 'descripcion'=>'CARTUCHO CALIBRE 7,62X54mm. (7N13)']);
        Municiones::create(['cod'=>'MA-10', 'descripcion'=>'CARTUCHO CALIBRE 7,62X51mm. (BALA)']);
        Municiones::create(['cod'=>'MA-16', 'descripcion'=>'CARTUCHO CALIBRE 7,62X51mm. (PROPULSOR)']);
        Municiones::create(['cod'=>'MA-26', 'descripcion'=>'CARTUCHO CALIBRE 7,62X51mm. (ESLABONADO)']);
        Municiones::create(['cod'=>'MA-11', 'descripcion'=>'CARTUCHO CALIBRE 7,62X51mm. (TRAZADOR)']);
        Municiones::create(['cod'=>'MA-6', 'descripcion'=>'CARTUCHO CALIBRE 7,62X51mm. (FOGUEO)']);
        Municiones::create(['cod'=>'MA-12', 'descripcion'=>'CARTUCHO CALIBRE 7,62X39mm. (BALA)']);
        Municiones::create(['cod'=>'MA-13', 'descripcion'=>'CARTUCHO CALIBRE 7,62X39mm. (TRAZADORA)']);
        Municiones::create(['cod'=>'MA-7', 'descripcion'=>'CARTUCHO CALIBRE 7,62x39mm. (FOGUEO)']);
        Municiones::create(['cod'=>'MA-2', 'descripcion'=>'CARTUCHO CALIBRE 5,56X45mm. (BALA)']);
        Municiones::create(['cod'=>'MA-8', 'descripcion'=>'CARTUCHO CALIBRE 5,56X45mm. (ESLABONADO)']);
        Municiones::create(['cod'=>'MA-3', 'descripcion'=>'CARTUCHO CALIBRE 5,56X45mm. (TRAZADOR)']);
        Municiones::create(['cod'=>'MA-9', 'descripcion'=>'CARTUCHO CALIBRE 5,56X45mm. (FOGUEO)']);
        Municiones::create(['cod'=>'MA-27', 'descripcion'=>'CARTUCHO CALIBRE 5,7X28mm. (BALA)']);
        Municiones::create(['cod'=>'MA-28', 'descripcion'=>'CARTUCHO CALIBRE 5,7X28mm. (TRAZADOR)']);
        Municiones::create(['cod'=>'MA-29', 'descripcion'=>'CARTUCHO CALIBRE 5,7X28mm. (SUB-SONICO)']);
        Municiones::create(['cod'=>'MA-5', 'descripcion'=>'CARTUCHO CALIBRE .38']);
        Municiones::create(['cod'=>'MA-25', 'descripcion'=>'CARTUCHO CALIBRE .357']);
        Municiones::create(['cod'=>'BCD', 'descripcion'=>'BENGALA N° 500 CD']);
        Municiones::create(['cod'=>'BS4', 'descripcion'=>'BENGALA SEÑAL CAL. 4']);
        Municiones::create(['cod'=>'BEH', 'descripcion'=>'BENGALA ILUMINANTE DE HELIO MDO. HT1000']);
        Municiones::create(['cod'=>'BOA', 'descripcion'=>'BENGALA ILUMINANTE DE SUPERFICIE A-1A3 (OPTICO-ACUSTICA)']);
        Municiones::create(['cod'=>'DAS', 'descripcion'=>'DISPOSITIVO DE ALARMA SONORA']);
        Municiones::create(['cod'=>'TB', 'descripcion'=>'TORPEDOS BANGALORE ']);
        Municiones::create(['cod'=>'GF-1', 'descripcion'=>'GRANADA DE FUSIL (AT-HE) YUGOSLAVA']);
        Municiones::create(['cod'=>'GF-2', 'descripcion'=>'GRANADA DE FUSIL (AT-EJERCICIO) YUGOSLAVA']);
        Municiones::create(['cod'=>'GF-3', 'descripcion'=>'GRANADA DE FUSIL (AT-FN-TELESCOPICA) ']);
        Municiones::create(['cod'=>'GF-4', 'descripcion'=>'GRANADA DE FUSIL (AP-HE) YUGOSLAVA']);
        Municiones::create(['cod'=>'GF-5', 'descripcion'=>'GRANADA DE FUSIL (AP-EJERCICIO) YUGOSLAVA']);
        Municiones::create(['cod'=>'GF-6', 'descripcion'=>'GRANADA DE FUSIL (FN-STRIM)']);
        Municiones::create(['cod'=>'GF-7', 'descripcion'=>'GRANADA DE FUSIL DE PRACTICA M66 ']);
        Municiones::create(['cod'=>'GM-1', 'descripcion'=>'GRANADA DE MANO BIV. PRB-75']);
        Municiones::create(['cod'=>'GM-2', 'descripcion'=>'GRANADA DE MANO BIVALENTE  MI4']);
        Municiones::create(['cod'=>'GM-3', 'descripcion'=>'GRANADA DE MANO BIVALENTE DM-51']);
        Municiones::create(['cod'=>'GM-4', 'descripcion'=>'GRANADA DE MANO DEFENSIVA M-26']);
        Municiones::create(['cod'=>'GM-5', 'descripcion'=>'GRANADA DE MANO DEFENSIVA M-26-A1 ']);
        Municiones::create(['cod'=>'GM-6', 'descripcion'=>'GRANADA DE MANO DEFENSIVA M-26-A2']);
        Municiones::create(['cod'=>'GM-7', 'descripcion'=>'GRANADA DE MANO DEFENSIVA M-26-A9']);
        Municiones::create(['cod'=>'GM-8', 'descripcion'=>'GRANADA DE MANO DEFENSIVA M-67']);
        Municiones::create(['cod'=>'GM-9', 'descripcion'=>'GRANADA DE MANO DEFENSIVA MKII']);
        Municiones::create(['cod'=>'GM-10', 'descripcion'=>'GRANADA DE MANO DEFENSIVA UZRGM']);
        Municiones::create(['cod'=>'GM-11', 'descripcion'=>'GRANADA DE MANO DEFENSIVA M-75']);
        Municiones::create(['cod'=>'GM-12', 'descripcion'=>'GRANADA DE MANO OFENSIVA M-26-A9']);
        Municiones::create(['cod'=>'GM-13', 'descripcion'=>'GRANADA DE MANO OFENSIVA M-15']);
        Municiones::create(['cod'=>'GM-14', 'descripcion'=>'GRANADA DE MANO OFENSIVA N°14']);
        Municiones::create(['cod'=>'GM-15', 'descripcion'=>'GRANADA DE MANO M-423']);
        Municiones::create(['cod'=>'GM-16', 'descripcion'=>'GRANADA DE MANO RGD-5']);
        Municiones::create(['cod'=>'GM-17', 'descripcion'=>'GRANADA DE MANO GREN HAND SMK']);
        Municiones::create(['cod'=>'GM-18', 'descripcion'=>'GRANADA DE MANO STUM (LUZ Y SONIDO)']);
        Municiones::create(['cod'=>'GM-19', 'descripcion'=>'GRANADA DE MANO Nº 25 ATURDIDORA (CUERPO)']);
        Municiones::create(['cod'=>'GM-20', 'descripcion'=>'GRANADA DE MANO M-50 (PRACT- SIN ESPOLETA)']);
        Municiones::create(['cod'=>'GM-21', 'descripcion'=>'GRANADA N°14 (TNT)']);
        Municiones::create(['cod'=>'EGM-1', 'descripcion'=>'ESPOLETA PARA GRANADA DE MANO Nº25 ATURDIDORA']);
        Municiones::create(['cod'=>'EGM-2', 'descripcion'=>'ESPOLETA PARA GRANADA DE MANO M26 (PRACTICA)']);
        Municiones::create(['cod'=>'TNT', 'descripcion'=>'TRINITROTULUENO (LIBRAS) ']);
        Municiones::create(['cod'=>'C4', 'descripcion'=>'COMPOSICION C4 (LIBRAS)']);
        Municiones::create(['cod'=>'CH', 'descripcion'=>'CARGA HUECA']);
        Municiones::create(['cod'=>'DE-1', 'descripcion'=>'DETONADORES ELECTRICOS']);
        Municiones::create(['cod'=>'DE-2', 'descripcion'=>'DETONADORES NO ELECTRICOS']);
        Municiones::create(['cod'=>'DE-3', 'descripcion'=>'DETONADORES PIROTECNICOS']);
        Municiones::create(['cod'=>'CD', 'descripcion'=>'CORDON DETONANTE (METROS)']);
        Municiones::create(['cod'=>'MS-1', 'descripcion'=>'MECHA LENTA (PIES)']);
        Municiones::create(['cod'=>'AVC', 'descripcion'=>'ARTIFICIO VARIOS COLORES']);
        Municiones::create(['cod'=>'AHV', 'descripcion'=>'ARTIFICIO DE HUMO VARIOS COLORES (VENCIDOS)']);
        Municiones::create(['cod'=>'AH-1', 'descripcion'=>'ARTIFICIO DE HUMO (AMARILLO)']);
        Municiones::create(['cod'=>'AH-2', 'descripcion'=>'ARTIFICIO DE HUMO  (GRIS)']);
        Municiones::create(['cod'=>'AH-3', 'descripcion'=>'ARTIFICIO DE HUMO (AZUL)']);
        Municiones::create(['cod'=>'AH-4', 'descripcion'=>'ARTIFICIO DE HUMO (BLANCO)']);
        Municiones::create(['cod'=>'AH-5', 'descripcion'=>'ARTIFICIO DE HUMO (ROJO)']);
        Municiones::create(['cod'=>'AH-6', 'descripcion'=>'ARTIFICIO DE HUMO (VERDE)']);
        Municiones::create(['cod'=>'AL-1', 'descripcion'=>'ARTIFICIO LACRIMOGENO 1 CS']);
        Municiones::create(['cod'=>'AL-2', 'descripcion'=>'ARTIFICIO LACRIMOGENO 2 CS']);
        Municiones::create(['cod'=>'AL-3', 'descripcion'=>'ARTIFICIO LACRIMOGENO 3 CS']);
        Municiones::create(['cod'=>'AL-4', 'descripcion'=>'ARTIFICIO LACRIMOGENO 4 CS']);
        Municiones::create(['cod'=>'AL-5', 'descripcion'=>'ARTIFICIO LACRIMOGENO 15 CS ']);
        Municiones::create(['cod'=>'AL-6', 'descripcion'=>'ARTIFICIO LACRIMOGENO 111 CS']);
        Municiones::create(['cod'=>'AL-7', 'descripcion'=>'ARTIFICIO LACRIMOGENO 112 CS']);
        Municiones::create(['cod'=>'AL-8', 'descripcion'=>'ARTIFICIO LACRIMOGENO 119 CS']);
        Municiones::create(['cod'=>'AL-9', 'descripcion'=>'ARTIFICIO LACRIMOGENO 515 CS']);
        Municiones::create(['cod'=>'AL-10', 'descripcion'=>'ARTIFICIO LACRIMOGENO 555 CS']);
        Municiones::create(['cod'=>'AL-11', 'descripcion'=>'ARTIFICIO LACRIMOGENO SMITH&WESSON']);
        Municiones::create(['cod'=>'AL-12', 'descripcion'=>'ARTIFICIO LACRIMOGENO APG']);
        Municiones::create(['cod'=>'AL-13', 'descripcion'=>'ARTIFICIO LACRIMOGENO APG-112 ']);
        Municiones::create(['cod'=>'AL-14', 'descripcion'=>'ARTIFICIO LACRIMOGENO GL-300TH CS']);
        Municiones::create(['cod'=>'AL-15', 'descripcion'=>'ARTIFICIO LACRIMOGENO GL-309 CS']);
        Municiones::create(['cod'=>'AL-16', 'descripcion'=>'ARTIFICIO LACRIMOGENO FA-221 CS TRIFASICO']);
        Municiones::create(['cod'=>'AL-17', 'descripcion'=>'ARTIFICIO LACRIMOGENO FA-224 CS']);
        Municiones::create(['cod'=>'AL-18', 'descripcion'=>'ARTIFICIO LACRIMOGENO 221 H TRIFASICO']);
        Municiones::create(['cod'=>'AL-19', 'descripcion'=>'ARTIFICIO LACRIMOGENO ATL-324 CS']);
        Municiones::create(['cod'=>'AL-20', 'descripcion'=>'ARTIFICIO LACRIMOGENO M 7-1 CS']);
        Municiones::create(['cod'=>'AL-21', 'descripcion'=>'ARTIFICIO LACRIMOGENO M 7 A-2']);
        Municiones::create(['cod'=>'AL-22', 'descripcion'=>'ARTIFICIO LACRIMOGENO FN LAC-M3']);
        Municiones::create(['cod'=>'AL-23', 'descripcion'=>'ARTIFICIO LACRIMOGENO CAVIM-FALKEN']);
        Municiones::create(['cod'=>'AL-24', 'descripcion'=>'ARTIFICIO LACRIMOGENO PN 770']);
        Municiones::create(['cod'=>'CL-17', 'descripcion'=>'CARTUCHO LACRIMOGENO CALIBRE 40 mm  GL-203T CS']);
        Municiones::create(['cod'=>'CL-18', 'descripcion'=>'CARTUCHO LACRIMOGENO CALIBRE 40 mm CAVIM-FALKEN ETIQUETA NEGRA TRIFASICO']);
        Municiones::create(['cod'=>'CL-19', 'descripcion'=>'CARTUCHO LACRIMOGENO CALIBRE 40 mm CAVIM-FALKEN ETIQUETA NEGRA MONOFASICO']);
        Municiones::create(['cod'=>'CL-20', 'descripcion'=>'CARTUCHO LACRIMOGENO CALIBRE 40 mm CAVIM-FALKEN ETIQUETA ROJA TRIFASICO']);
        Municiones::create(['cod'=>'CL-21', 'descripcion'=>'CARTUCHO LACRIMOGENO CALIBRE 40 mm CAVIM-FALKEN ETIQUETA ROJA MONOFASICO']);
        Municiones::create(['cod'=>'CIE-1', 'descripcion'=>'CARTUCHO LACRIMOGENO CALIBRE 38 mm NF01-E (IGNICIÓN ELÉCTRICA PARA VN4) TRIFASICO']);
        Municiones::create(['cod'=>'CG-38', 'descripcion'=>'CARTUCHO LACRIMOGENO CALIBRE 38 mm NF04 PERDIGON DE CAUCHO']);
        Municiones::create(['cod'=>'CL-1', 'descripcion'=>'CARTUCHO LACRIMOGENO CALIBRE 37/38mm CAVIM-FALKEN ETIQUETA NEGRA TRIFASICO']);
        Municiones::create(['cod'=>'CL-2', 'descripcion'=>'CARTUCHO LACRIMOGENO CALIBRE 37/38mm CAVIM-FALKEN ETIQUETA NEGRA MONOFASICO']);
        Municiones::create(['cod'=>'CL-3', 'descripcion'=>'CARTUCHO LACRIMOGENO CALIBRE 37/38mm CAVIM-FALKEN ETIQUETA ROJA TRIFASICO']);
        Municiones::create(['cod'=>'CL-4', 'descripcion'=>'CARTUCHO LACRIMOGENO CALIBRE 37/38mm CAVIM-FALKEN ETIQUETA ROJA MONOFASICO']);
        Municiones::create(['cod'=>'CL-5', 'descripcion'=>'CARTUCHO LACRIMOGENO CALIBRE 37/38mm. MOD. 20F DEF-TEC']);
        Municiones::create(['cod'=>'CL-6', 'descripcion'=>'CARTUCHO LACRIMOGENO CALIBRE 37/38mm. (NF01) MONOFASICO']);
        Municiones::create(['cod'=>'CIE-2', 'descripcion'=>'CARTUCHO LACRIMOGENO CALIBRE 37/38mm. (NF01-3) TRIFASICO']);
        Municiones::create(['cod'=>'CL-7', 'descripcion'=>'CARTUCHO PROPULSOR CALIBRE 37/38mm. DEF-TEC']);
        Municiones::create(['cod'=>'CL-8', 'descripcion'=>'CARTUCHO LACRIMOGENO CALIBRE 37 mm N° 17 CS']);
        Municiones::create(['cod'=>'CL-9', 'descripcion'=>'CARTUCHO LACRIMOGENO CALIBRE 37 mm N° 19 CS']);
        Municiones::create(['cod'=>'CL-10', 'descripcion'=>'CARTUCHO LACRIMOGENO CALIBRE 37 mm N° 20 CS']);
        Municiones::create(['cod'=>'CL-11', 'descripcion'=>'CARTUCHO LACRIMOGENO CALIBRE 37 mm GL-203L CS']);
        Municiones::create(['cod'=>'CL-12', 'descripcion'=>'CARTUCHO LACRIMOGENO CALIBRE 37 mm GL-203 TCS']);
        Municiones::create(['cod'=>'CL-13', 'descripcion'=>'CARTUCHO.LACRIMOGENO CALIBRE 37 mm N° 560 CS']);
        Municiones::create(['cod'=>'CL-14', 'descripcion'=>'CARTUCHO LACRIMOGENO CALIBRE 37 mm N° 565 CS']);
        Municiones::create(['cod'=>'CL-15', 'descripcion'=>'CARTUCHO LACRIMOGENO CALIBRE 37 mm N° 565-5CS']);
        Municiones::create(['cod'=>'CL-16', 'descripcion'=>'CARTUCHO LACRIMOGENO CALIBRE 37 mm N° 565-10CS']);
        Municiones::create(['cod'=>'CCP', 'descripcion'=>'CARTUCHO CALIBRE 12 (PROPULSOR)']);
        Municiones::create(['cod'=>'CPL', 'descripcion'=>'CARTUCHO CALIBRE 12 (POLIETILENO)']);
        Municiones::create(['cod'=>'CPG', 'descripcion'=>'CARTUCHO CALIBRE 12 NF42 (POSTA DE GOMA)']);
        Municiones::create(['cod'=>'SDP', 'descripcion'=>'SPRAY DE DEFENSA PERSONAL (PARALY)']);


    }
}