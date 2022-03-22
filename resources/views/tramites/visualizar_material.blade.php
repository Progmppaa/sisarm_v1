@extends("theme.$theme.layout")
@section('titulo')
    Visualización
@stop
@section('styles')

@stop
@section('contenido')
    <div class="row">
        <div class="col-2">
            <img src="" alt="" srcset="">
        </div>
        <div class="col-8 text-center">
            <p>REPUBLICA BOLIVARIANA DE VENEZUELA<br>MINISTERIO DEL PODER POPULAR PARA LA DEFENSA <br> <b>GUARDIA NACIONAL
                    BOLIVARIANA <br> DIRECCIÓN DE LOGISTICA <br><b> SERVICIO DE ARMAMENTO <br> JEFATURA</B></b></p>
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
        <br>
        <div class="row w-100">
            <div class="col-12 text-center">
                <h2><b>MOVIMIENTO DE MATERIAL DE GUERRA</b></h2>
            </div>
        </div>
    </div>

    <br>

    <div class="row col-12 ml-2 text-left">
         <p><b>NRO:</b>001-21-RME<br>{{-- {{ $material->nro_correlativo}} --}}
            <b>FECHA:</b>CARACAS, 11 DE ENERO DEL 2021<br>{{-- {{ $material->fecha_doc}} --}}
            <b>DEL:</b>GB. JEFE DEL SERVICIO DE ARMAMENTO DE LA GUARDIA NACIONAL BOLIVARIANA<br>{{-- {{ $material->remitente}} --}}
            <b>AL:</b>CNEL. CHACIN SOCORRO MIGUEL ANDRES</p>{{-- {{ $material->destinatario}} --}}
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <h2><b>ASUNTO</b></h2>
        </div>
    </div>

    <br>

    <div class="row" align=justify>
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
        <table class="w-100 mx-4" border="2">
            <tr>
                <td class="text-center">SERA OBJETO DE UNA SANCIÓN DISCIPLINARIA Y PECUNIARIA QUIEN DESTRUYA Y EXTRAVIE
                    EL ARMA DE REGLAMENTO Y/O LA HOJA DE ASIGNACIÓN</td>
            </tr>
        </table>
    </div>
    <div class="row mt-3 justify-content-center">
        <table class="w-100 mx-4" border="3">
            <tr>
                <th class="text-center" style="width: 55%;"><B>CLASE DE MATERIAL</B></th>
                <th class="text-center"><B>CANTIDAD SOLICITADA</B></th>
                <th class="text-center"><B>CANTIDAD AUTORIZADA</B></th>
            </tr>
            <tr>
                <td class="text-center">PISTOLA BERETTA MOD. 92FS Y PISTOLA TANGFOLIO, MOD. FORCE 99 CAL. 9X19 mm,
                    SERIAL N° AD01458Z Y AB81162 </td>
                <td class="text-center">01</td>
                <td class="text-center">01</td>
            </tr>


            <tr>
                <td class="text-center">CARGADORES..................</td>
                <td class="text-center">01</td>
                <td class="text-center">01</td>
            </tr>

            <tr>
                <td class="text-center">CARTUCHOS...................</td>
                <td class="text-center">00</td>
                <td class="text-center">00</td>
            </tr>
            <tr>
                <td class="text-center">NOTA: REFERIDO MATERIAL, SE ENTREGA EN CALIDAD DE DEVOLUCIÓN, REGRESÓ DE LA
                    MISIÓN. {{-- {{ $asunto->nota}} --}}
                <td>
            </tr>

        </table>
    </div>
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-4 ml-5 mr-5">
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
                <P class="m-0 p-0"><B class="m-0 p-0"> TTE. KEEN CAMACHO LABRADOR</B></P>
                <p class="m-0 p-0"><small>JEFE DE LA SECCIÓN DE ARMAS</small></p>
                <P>. _______________________________</P>
            </div>
            <div class="row-col mx-auto mt-5">
                <P class="m-0 p-0"><B class="m-0 p-0"> CAP. JOSE VILLALBA GARCIA</B></P>
                <p class="m-0 p-0"><small>JEFE DEL DEPARTAMENTO DE <BR>ABASTECIMIENTO Y MANTENIMIENTO</small></p>
                <P>. _______________________________</P>
            </div>
        </div>
        <div class="col-6">
            <P class="m-0 p-0"><B class="m-0 p-0">CNEL. CHACIN SOCORRO MIGUEL ANDRES</B></P>
            <p class="m-0 p-0"><small> C.I: 11.721.283</small></p>
            <P>. _______________________________</P>
            <div class="row-col mx-auto mt-5">
                <P class="m-0 p-0"><B class="m-0 p-0">GB. GIACOMO SAMMITO BERTOLINO</B></P>
                <p class="m-0 p-0"><small>JEFE DEL SERVICIO DE ARMAMENTO DE LA GUARDIA NACIONAL BOLIVARIANA</small>
                </p>
                <P>. _______________________________</P>
            </div>
        </div>


    </div>

    </div>
    </div>
@stop
@section('scripts')
@endsection
