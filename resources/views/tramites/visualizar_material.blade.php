<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
     
</head>

<body class="m-3">
    <div class="row">
        <div class="col-2">
            <img src="" alt="" srcset="">
        </div>
        <div class="col-8 text-center">
            <p>REPÚBLICA BOLIVARIANA DE VENEZUELA<br>MINISTERIO DEL PODER POPULAR PARA LA DEFENSA <br> <b>GUARDIA
                    NACIONAL
                    BOLIVARIANA </b><br> DIRECCIÓN DE LOGÍSTICA <br><b> SERVICIO DE ARMAMENTO <br> JEFATURA</B></b></p>
        </div>
        <div class="col-2">
            <div class="row mx-auto">
                <div class="col">
                    <img src="" alt="" srcset="">
                </div>
                <div class="row mx-auto">
                    <div class="col">
                        <b>GSB/RME/042</b>
                        {{-- <b> {{ $parametros->siglas_jefe}}/{{ $asunto->siglas_doc}}/{{ $material->nro_doc }}</b> --}}
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row w-100">
            <div class="col-12 text-center mt-5">
                <h2><b>MOVIMIENTO DE MATERIAL DE GUERRA</b></h2>
            </div>
        </div>
    </div>

    <br>

    <div class="row-4 col-12 ml-2 text-left">
        <p><b>NRO: </b>001-21-RME</p>{{-- {{ $material->nro_correlativo}} --}}
        <p><b>FECHA:</b> CARACAS, {{ date('d/m/Y', strtotime(date('Y/m/d'))) }}</p>
        <p><b>DEL:</b>GB. JEFE DEL SERVICIO DE ARMAMENTO DE LA GUARDIA NACIONAL BOLIVARIANA</p>{{-- {{ $material->remitente}} --}}
        <p><b>AL:</b>CNEL. CHACIN SOCORRO MIGUEL ANDRES</p>{{-- {{ $material->destinatario}} --}}
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <h2><b>ASUNTO</b></h2>
        </div>
    </div>

    <br>

    <div class="row" style="text-align: justify">
        <div class="col-5 mt-1 ml-5 ">
            {{-- {{ $asunto->asunto}} --}}

            <h3>° DOTACIÓN ORGANICA</h3>
            <h3>° ASIGNACIÓN</h3>
            <h3>° REEMPLAZO</h3>
            <h3>° REPARACIÓN</h3>
            <h3>° MISIÓN DE ESTUDIOS</h3>
        </div>

        <div class="col-5 mt-1 ml-5">

            <h3>° DESINCORPORACIÓN</h3>
            <h3>° REINTEGRO</h3>
            <h3>° DEVOLUCIÓN</h3>
            <h3>° OTROS</h3>

        </div>
    </div>
    <br>

    <div class="row justify-content-center">
        <table class="w-100 mx-3" border="3">
            <tr>
                {{-- <td>SERA OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVIE
                    EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN</td> --}}
                    {{-- <td>{{ $asunto->nota}}</td> --}}
            </tr>
        </table>
    </div>
    <div class="mt-2 text-justify">
        <table class=" row-5 w-100" border="3">
            <tr>
                <th class="text-center" style="width: 55%;"><B>CLASE DE MATERIAL</B></th>
                <th><B>CANTIDAD SOLICITADA</B></th>
                <th><B>CANTIDAD AUTORIZADA</B></th>
            </tr>
            <tr>
                <td><b>PISTOLA BERETTA MOD. 92FS Y PISTOLA TANGFOLIO, MOD. FORCE 99 CAL. 9X19 mm,
                    SERIAL N° AD01458Z Y AB81162 </td>
                <td class="text-center"><b>01</td>
                <td class="text-center"><b>01</td>
            </tr>


            <tr>
                <td ><b>CARGADORES:</td>
                <td class="text-center"><b>01</td>
                <td class="text-center"><b>01</td>
            </tr>

            <tr >
                <td><b>CARTUCHOS:</td>
                <td class="text-center"><b>00</td>
                <td class="text-center"><b>00</td>
            </tr>
            <tr>
                <td class="row-col text-justify"><b>NOTA:</b> REFERIDO MATERIAL, SE ENTREGA EN CALIDAD DE DEVOLUCIÓN, REGRESÓ DE
                    LA MISIÓN.
                    {{-- {{ $asunto->nota}} --}} 
               
                    <td></td> 
                    <td></td>
                </td>
            </tr>
            
        </table>
    </div>
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-5 ml-3 mr-5">
            <h3>ENTREGA CONFORME:</h3>
        </div>
        <div class="mr-5 ml-5 ">
            <h3>RECIBE CONFORME:</h3>
        </div>
        <br>
        <br>
        <br>
    </div>

    <div class="row w-100 mx-auto text-center">
        <div class="col-6">
            <div class="row-col mx-auto">
                <br><br>
                <P>. _______________________________</P>
                <P class="m-0 p-0"><B class="m-0 p-0"> TTE. KEEN CAMACHO LABRADOR</B></P>
                <p class="m-0 p-0"><small>JEFE DE LA SECCIÓN DE ARMAS</small></p>
                
            </div>
            <div class="row-col mx-auto mt-5">
                <br><br>
                <p>. _______________________________</p>
                <P class="m-0 p-0"><B class="m-0 p-0"> CAP. JOSE VILLALBA GARCIA</B></P>
                <p class="m-0 p-0"><small>JEFE DEL DEPARTAMENTO DE <BR>ABASTECIMIENTO Y MANTENIMIENTO</small></p>
            </div>
        </div>
        <div class="col-6">
            <br><br>
            <P>. _______________________________</P>
            <P class="m-0 p-0"><B class="m-0 p-0">CNEL. CHACIN SOCORRO MIGUEL ANDRES</B></P>
            <p class="m-0 p-0"><small> C.I: 11.721.283</small></p>


            <div class="row-col mx-auto mt-5">
                <br><br>
                <p>. _______________________________</p>
                <P class="m-0 p-0"><B class="m-0 p-0">GB. GIACOMO SAMMITO BERTOLINO</B></P>
                <p class="m-0 p-0"><small>JEFE DEL SERVICIO DE ARMAMENTO DE LA GUARDIA NACIONAL
                        BOLIVARIANA</small>
                </p>
            </div>
        </div>


    </div>

    </div>
    </div>


    <script>
        javascript: window.print();
    </script>
