@extends("theme.$theme.layout")
@section('titulo')
    Movimiento de Material
@stop
@section('styles')
<script language="JavaScript">
    function aggProd() {
        var p = document.querySelector(".material");
        var p_prime = p.cloneNode(true);
        document.getElementById('armass').appendChild(p_prime);
    }
    // Agregar Municion
    function aggMunicion() {
        var m = document.querySelector(".clamuni");
        var m_prime = m.cloneNode(true);
        document.getElementById('municion').appendChild(m_prime);
    }
     // Agregar Orden Público
     function aggOrdenPublico() {
        var op = document.querySelector(".claorden");
        var op_prime = op.cloneNode(true);
        document.getElementById('publi').appendChild(op_prime);
    }
    // Agregar Explosivos
    function aggExplosivos() {
        var explosivos = document.querySelector(".claexplo");
        var explosivos_prime = explosivos.cloneNode(true);
        document.getElementById('explo').appendChild(explosivos_prime);
    }
    // Agregar Equipos Opticos y Optrópicos
    function aggEquipos() {
        var equipos = document.querySelector(".eopop");
        var equipos_prime = equipos.cloneNode(true);
        document.getElementById('equipo').appendChild(equipos_prime);
    }
    // Agregar Artillería Aerea
    function aggArtiaerea() {
        var artilleria = document.querySelector(".clasartiae");
        var artilleria_prime = artilleria.cloneNode(true);
        document.getElementById('equipo').appendChild(artilleria_prime);
    }
    

    
    //Función eliminar elemento
    function eliminar_elemento(valor) {
        var elementos = document.getElementById('armass');
        var vm = 0;
        console.log(vm, 'inicio');
        var vm = elementos.children.length;
        console.log(vm, 'cuenta');

        if (vm >= 2) {
            console.log(vm, 'if');
            valor.parentNode.parentNode.removeChild(valor.parentNode);
            var vm = elementos.children.length;
            console.log(vm, 'end if');
        };
        var vm = 0;

        // valor.parentNode.parentNode.removeChild(valor.parentNode);

    }
     //Eliminar Municion
     function eliminar_municion(valor) {
        var eliminarm = document.getElementById('municion');
        var vm = 0;
        console.log(vm, 'inicio');
        var vm = eliminarm.children.length;
        console.log(vm, 'cuenta');

        if (vm >= 2) {
            console.log(vm, 'if');
            valor.parentNode.parentNode.removeChild(valor.parentNode);
            var vm = eliminarm.children.length;
            console.log(vm, 'end if');
        };
        var vm = 0;

        // valor.parentNode.parentNode.removeChild(valor.parentNode);

    }
    //Eliminar Orden Público
    function eliminar_ordenpublico(valor) {
        var opeliminar = document.getElementById('publi');
        var vm = 0;
        console.log(vm, 'inicio');
        var vm = opeliminar.children.length;
        console.log(vm, 'cuenta');

        if (vm >= 2) {
            console.log(vm, 'if');
            valor.parentNode.parentNode.removeChild(valor.parentNode);
            var vm = opeliminar.children.length;
            console.log(vm, 'end if');
        };
        var vm = 0;

        // valor.parentNode.parentNode.removeChild(valor.parentNode);

    }
    //Eliminar Explosivos
    function eliminar_explosivos(valor) {
        var exploeliminar = document.getElementById('explo');
        var vm = 0;
        console.log(vm, 'inicio');
        var vm = exploeliminar.children.length;
        console.log(vm, 'cuenta');

        if (vm >= 2) {
            console.log(vm, 'if');
            valor.parentNode.parentNode.removeChild(valor.parentNode);
            var vm = exploeliminar.children.length;
            console.log(vm, 'end if');
        };
        var vm = 0;

        // valor.parentNode.parentNode.removeChild(valor.parentNode);

    }
    //Eliminar Equipos Opticos y Optrópicos
    function eliminar_equipos(valor) {
        var equieliminar = document.getElementById('equipo');
        var vm = 0;
        console.log(vm, 'inicio');
        var vm = equieliminar.children.length;
        console.log(vm, 'cuenta');

        if (vm >= 2) {
            console.log(vm, 'if');
            valor.parentNode.parentNode.removeChild(valor.parentNode);
            var vm = equieliminar.children.length;
            console.log(vm, 'end if');
        };
        var vm = 0;

        // valor.parentNode.parentNode.removeChild(valor.parentNode);

    }
    //Eliminar Artillería Aerea
    function eliminar_artiaerea(valor) {
        var artieliminar = document.getElementById('aerea');
        var vm = 0;
        console.log(vm, 'inicio');
        var vm = artieliminar.children.length;
        console.log(vm, 'cuenta');

        if (vm >= 2) {
            console.log(vm, 'if');
            valor.parentNode.parentNode.removeChild(valor.parentNode);
            var vm = artieliminar.children.length;
            console.log(vm, 'end if');
        };
        var vm = 0;

        // valor.parentNode.parentNode.removeChild(valor.parentNode);

    }


    function aggCargador() {
        var cargador = document.querySelector(".cargador");
        var cargador_copia = cargador.cloneNode(true);
        document.getElementById('cargadores').appendChild(cargador_copia);
    }

    function aggCartucho() {
        var cartucho = document.querySelector(".cartucho");
        var cartucho_copia = cartucho.cloneNode(true);
        document.getElementById('cartuchos').appendChild(cartucho_copia);
    }
</script>
@stop
@section('contenido')
    {{-- Modal Agregar Material Entregado --}}
    <div class="modal fade" id="creacion" tabindex="-1" role="dialog" style="text-transform: uppercase;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content px-3 pb-0">
                <div class="modal-header row d-inline ml-2">
                    <button type="button" class="close mt-1 mr-1 p-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title text-center ml-4">Movimiento de Material de Guerra</h4>
                </div>
                <div class="modal-body " style="display: flex;align-items-left">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('material-store') }}"
                        enctype="multipart/form-data" id="form-nuevo">
                        @csrf
                        <div class="row text-center">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="ASUNTO">ASUNTO:</label>
                                    <select class=" form-control col" name="asunto" id="asuntos"
                                        onchange="mostrar(this.value)" required>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="ASUNTO">TIPO DOC</label>
                                    <select class=" form-control col " onchange="tipoasunto(this.value);" name="tipo_doc"
                                        id="tipo_doc" required style="text-transform: uppercase;">

                                        <option selected disabled> SELECCIONE UN TIPO DE DOCUMENTO</option>
                                        <option value="armamentos">Armamentos</option>
                                        <option value="municiones">Municiones</option>
                                        <option value="ordenpublico">Orden Público</option>
                                        <option value="explosivos">Explosivos</option>
                                        <option value="equipos">Equipos Ópticos y Optrónicos</option>
                                        <option value="artilleria">Artillerías Aereas</option>

                                    </select>
                                </div>
                            </div>


                            <div class="col-2 ml-1">
                                <div class="form-group">
                                    <label>N° del Doc:</label>
                                    <input type="number" name="nro_doc" class="form-control" placeholder="073">
                                </div>
                            </div>
                            
                            <div class="row w-100" id="DEL-AL1" style="display: none; justify-content: center;">
                                <div class="col-6 ">
                                    <div class="form-group">
                                        <label for="remitente">DEL:</label>
                                        <select class="form-control" name="remitente" id="busqueda"></select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group ">
                                        <label for="destinatario">AL:</label>
                                        <select class="form-control " name="destinatario" id="busqueda2"></select>
                                    </div>
                                </div>
                             </div>
                            <div class="row"  id="AL-DEL2" style="display: none; justify-content: center;">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="remitente">AL:</label>
                                        <select class="form-control  " name="remitente" id="busqueda3"></select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="destinatario">DEL:</label>
                                        <select class="form-control " name="destinatario" id="busqueda4"></select>
                                    </div>
                                </div>
                            </div>

                            </div>



                        <div class="card elevation-2" style="display: none;" id="armas">
                            <div class="card-header text-center">
                                <b>Armas</b>
                            </div>
                            <div class="card-body">
                                <div class="row form-group" id="armass">
                                    <div class="material row ">
                                        <div class="col-md-5 p-2 ">
                                            <select class="form-control" name="armas[]" id="armamentos"
                                                style=" text-transform: uppercase; width:100% !important; "
                                                required></select>
                                        </div>
                                        <div class="col-md-5 p-2">
                                            <input id="serial" class="form-control " type="text" name="serials[]"
                                                style="text-transform: uppercase;" placeholder="serial" required />
                                        </div>
                                        <a class="col-md-1 p-2" onclick="eliminar_elemento(this)">
                                            <span class="btn btn-danger"><i class="fas fa-minus"></i></span>
                                        </a>
                                        <a class="col-md-1 p-2" onclick="aggProd();">
                                            <span class="btn btn-primary"><i class="fas fa-plus"></i></span>
                                        </a>

                                        <div class="row form-group aling-center " style="text-transform: uppercase;">

                                            <label class="col-5 text-center">Cargadores</label>
                                            <input type="number" name="cargadores[]" min="1" class="form-control col-1"
                                                placeholder="1" required>
                                            <label class="col-5 text-center">Cartuchos</label>
                                            <input type="number" name="cartuchos[]" min="1" class="form-control col-1"
                                                placeholder="1" required>

                                        </div>

                                        <div class="row form-group aling-center ">
                                            <label class="ml-2 text-center">¿Desea Asignar Accesorios?</label>

                                            <select class="col-md-5 ml-2" name="opciaccesorios" id="opaccesorios"
                                                onchange="acc(this.value);" style="text-transform: uppercase;">
                                                <option selected disabled>SELECCIONE</option>
                                                <option value="si">Si</option>
                                                <option value="no">No</option>
                                            </select>

                                        </div>
                                        <div class=" row col-4 form-group aling-center" id="accesorios"
                                        style="display: none; text-transform: uppercase;">
                                        <label class="ml-2 text-center">Accesorios
                                        <select class="row col-md-12 ml-2" name="accesorios" id="selecaccesorios" style="text-transform: uppercase;"> 
                                        </select></label>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card elevation-2" style="display: none;" id="municiones">
                            <div class="card-header text-center">
                                <b>Municiones</b>
                            </div>
                            <div class="card-body" >
                                <div class="row form-group" id="municion">
                                    <div class="clamuni row form-group" >
                                        <div class="col-10 ">
                                                <select class="form-control " name="muni[]" id="municions"
                                                    style=" text-transform: uppercase; width:100% !important;"
                                                    required>
                                                </select>
                                            </div>
                                            <a class="col-md-1" onclick="eliminar_municion(this)">
                                                <span class="btn btn-danger"><i class="fas fa-minus"></i></span>
                                            </a>
                                            <a class="col-md-1 " onclick="aggMunicion();">
                                                <span class="btn btn-primary"><i class="fas fa-plus"></i></span>
                                            </a>
                                    </div>                                 
                                </div>
                            </div>
                            
                        </div>
                        <div class="card elevation-2" style="display: none;" id="ordenpublico">
                            <div class="card-header text-center">
                                <b>Orden Público</b>
                            </div>
                            <div class="card-body" >
                                <div class="row form-group" id="publi">
                                    <div class="claorden row " >
                                        <div class="form-group row">
                                            <div class="col-10 ">
                                                <select class="form-control " name="ordenpublic" id="publico"
                                                    style=" text-transform: uppercase; width:100% !important;"
                                                    required>
                                                </select>
                                            </div>
                                            <a class="col-md-1" onclick="eliminar_ordenpublico(this)">
                                                <span class="btn btn-danger"><i class="fas fa-minus"></i></span>
                                            </a>
                                            <a class="col-md-1 " onclick="aggOrdenPublico();">
                                                <span class="btn btn-primary"><i class="fas fa-plus"></i></span>
                                            </a>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card elevation-2" style="display: none;" id="explosivos">
                            <div class="card-header text-center">
                                <b>Explosivos</b>
                            </div>
                            <div class="card-body" >
                                <div class="row form-group" id="explo">
                                    <div class="claexplo row " >
                                        <div class="form-group row">
                                            <div class="col-10">
                                                <select class="form-control " name="ordenpublic[]" id="explosivo"
                                                    style=" text-transform: uppercase; width:100% !important;"
                                                    required>
                                                </select>
                                            </div>
                                            <a class="col-md-1" onclick="eliminar_explosivos(this)">
                                                <span class="btn btn-danger"><i class="fas fa-minus"></i></span>
                                            </a>
                                            <a class="col-md-1 " onclick="aggExplosivos();">
                                                <span class="btn btn-primary"><i class="fas fa-plus"></i></span>
                                            </a>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card elevation-2" style="display: none;" id="equipos">
                            <div class="card-header text-center">
                                <b>Equipos Opticos y Optrópicos</b>
                            </div>
                            <div class="card-body" >
                                <div class="row form-group" id="equipo">
                                    <div class="eopop row " >
                                        <div class="form-group row">
                                            <div class="col-10 ">
                                                <select class="form-control " name="ordenpublic[]" id="optropicos"
                                                    style=" text-transform: uppercase; width:100% !important;"
                                                    required>
                                                </select>
                                            </div>
                                            <a class="col-md-1" onclick="eliminar_equipos(this)">
                                                <span class="btn btn-danger"><i class="fas fa-minus"></i></span>
                                            </a>
                                            <a class="col-md-1 " onclick="aggEquipos();">
                                                <span class="btn btn-primary"><i class="fas fa-plus"></i></span>
                                            </a>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card elevation-2" style="display: none;" id="artilleria">
                            <div class="card-header text-center">
                                <b>Artillería Aerea</b>
                            </div>
                            <div class="card-body" >
                                <div class="row form-group" id="aerea">
                                    <div class="clasartiae row " >
                                        <div class="form-group row">
                                            <div class="col-10 ">
                                                <select class="form-control " name="artilleria[]" id="aarea"
                                                    style=" text-transform: uppercase; width:100% !important;"
                                                    required>
                                                </select>
                                            </div>
                                            <a class="col-md-1" onclick="eliminar_artiaerea(this)">
                                                <span class="btn btn-danger"><i class="fas fa-minus"></i></span>
                                            </a>
                                            <a class="col-md-1 " onclick="aggArtiaerea();">
                                                <span class="btn btn-primary"><i class="fas fa-plus"></i></span>
                                            </a>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer row my-auto pt-3 ">
                            <div class="col-3">
                                <button type="submit" class="btn btn-primary " id="btn-nuevo">
                                    Guardar
                                </button>
                            </div>
                            <div class="col-3">
                                <input class="btn bg-gradient-info" type="reset" value="Limpiar">
                            </div>
                            <div class="col-3">
                                <button id="limpiar" type="button" class="btn btn-danger" data-dismiss="modal">
                                    Cancelar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Fin de Modal --}}
    <div class="container-fluid">
        <div class="row pt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="text-align:left;">
                        <h3 class="d-inline">Listado de Asignación del Material de Guerra</h3>

                        <button class=" d-inline btn btn-info float-right shadow " id="btn-creacion" data-toggle="modal"
                            data-target="#creacion" name="Agregar Producto">
                            Seleccione el Tipo de Documento que Desea Generar
                        </button>

                    </div>
                    <div class="card-body">
                        <table id="notas" class="table table-bordered table-striped">
                            <thead class="text-center text-white" style="background-color:#6A0304">
                                <tr>
                                    {{-- <th>NRO</th>
                                    <th>FECHA</th> --}}
                                    {{-- <th>DEL</th> --}}
                                    <th>AL</th>
                                    <th>ASUNTO</th>
                                    <th>TIPO DE DOCUMENTO</th>
                                    <th>ARMAS</th>
                                    <th>CARTUCHOS</th>
                                    <th>CARGADORES</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($materials as $do)
                                    <tr>
                                        {{-- <td>{{ $do->nro_doc }}</td> --}}

                                        {{-- <td>
                                            @if ($do->remitente)
                                                @foreach ($personal as $persona)
                                                    @if ($persona->id == $do->remitente)
                                                        {{ $persona->nombres }}
                                @endif
                                @endforeach
                                @endif
                                </td> --}}

                                        <td>
                                            @if ($do->destinatario)
                                                @foreach ($personal as $persona)
                                                    @if ($persona->id == $do->destinatario)
                                                        {{ $persona->nombres }}
                                                    @endif
                                                @endforeach
                                            @endif
                                        </td>

                                        <td>{{ $do->asunto }}</td>
                                        <td>{{ $do->tipo_de_documento }}</td>
                                        <td>{{ $do->armas }}</td>
                                        <td>{{ $do->cartuchos }}</td>
                                        <td>{{ $do->cargadores }}</td>

                                        <td>
                                            <a href="{{ route('visualizar') }}" class="btn btn-info">
                                                Visualizar
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script>
        function mostrar(id) {
            if (id == "DOTACIÓN ORGÁNICA" || id == "DEVOLUCIÓN" || id == "ASIGNACIÓN" || id == "REEMPLAZO") {
                $("#DEL-AL1").show();
                $("#AL-DEL2").hide();
            }

            if (id == "REPARACIÓN" || id == "MISIÓN DE ESTUDIOS" || id == "DESINCORPORACION" || id == "REINTEGRO" || id ==
                "OTROS") {

                $("#DEL-AL1").hide();
                $("#AL-DEL2").show();
            }
        }

        function tipoasunto(asunto) {
            if (asunto == 'armamentos') {

                $('#armas').show();
                $('#municiones').hide();
                $('#ordenpublico').hide();
                $('#explosivos').hide();
                $('#equipos').hide();
                $('#artilleria').hide();

                var urlArmamentos = "{{ url('/extras/armas') }}";
                $.get(urlArmamentos, function(data, status) {
                    var $el = $("#armamentos");
                    $el.empty(); // remove old options
                    $el.append($("<option selected disabled></option>").text(
                        'SELECCIONE UNA ARMA'));
                    $.each(data, function(key, value) {
                        $el.append($("<option></option>").attr("value", value.nombre).text(
                            value.nombre + ' | ' + value.modelo));
                    });
                }).fail(function() {
                    console.log("Error");
                });
            } else if (asunto == 'municiones') {
                $('#municiones').show();
                $('#armas').hide();
                $('#ordenpublico').hide();
                $('#explosivos').hide();
                $('#equipos').hide();
                $('#artilleria').hide();

                var urlMuniciones = "{{ url('/administracion/municiones') }}";
                // console.log(urlMuniciones);
                $.get(urlMuniciones, function(data, status) {
                    // console.log(data);
                    var $el = $("#municions");
                    $el.empty(); // remove old options
                    $el.append($("<option selected disabled></option>").text(
                        'SELECCIONE UNA MUNICIÓN'));
                    $.each(data, function(key, value) {
                        $el.append($("<option></option>").attr("value", value.id).text(
                            value.codigo + ' ' + value.descripcion));
                    });
                }).fail(function() {
                    console.log("Error");
                });
            }
            else if (asunto == 'ordenpublico') {
                $('#ordenpublico').show();
                $('#armas').hide();
                $('#municiones').hide();
                $('#explosivos').hide();
                $('#equipos').hide();
                $('#artilleria').hide();
                var urlOrdenPublico = "{{ url('/administracion/OrdenPublico') }}";
                console.log(urlOrdenPublico);
                $.get(urlOrdenPublico, function(data, status) {
                    console.log(data);
                    var $el = $("#publico");
                    $el.empty(); // remove old options
                    $el.append($("<option selected disabled></option>").text(
                        'SELECCIONE UN ORDEN PÚBLICO'));
                    $.each(data, function(key, value) {
                        $el.append($("<option></option>").attr("value", value.id).text(
                             value.descripcion));
                    });
                }).fail(function() {
                    console.log("Error");
                });
            }else if (asunto == 'explosivos') {
                $('#explosivos').show();
                $('#armas').hide();
                $('#municiones').hide();
                $('#ordenpublico').hide();
                $('#equipos').hide();
                $('#artilleria').hide();

                var urlExplosivos = "{{ url('/administracion/explosivos') }}";
                // console.log(urlMuniciones);
                $.get(urlExplosivos, function(data, status) {
                    // console.log(data);
                    var $el = $("#explosivo");
                    $el.empty(); // remove old options
                    $el.append($("<option selected disabled></option>").text(
                        'SELECCIONE UN EXPLOSIVO'));
                    $.each(data, function(key, value) {
                        $el.append($("<option></option>").attr("value", value.id).text(
                             value.descripcion));
                    });
                }).fail(function() {
                    console.log("Error");
                });
            }else if (asunto == 'equipos') {
                $('#equipos').show();
                $('#armas').hide();
                $('#municiones').hide();
                $('#ordenpublico').hide();
                $('#explosivos').hide();
                $('#artilleria').hide();
                var urlEopop = "{{ url('/administracion/optronicos') }}";
                // console.log(urlEopop);
                $.get(urlEopop, function(data, status) {
                    // console.log(data);
                    var $el = $("#optropicos");
                    $el.empty(); // remove old options
                    $el.append($("<option selected disabled></option>").text(
                        'SELECCIONE UN EQUIPO OPTRÓNICO U OPTRÓPICO'));
                    $.each(data, function(key, value) {
                        $el.append($("<option></option>").attr("value", value.nombre).text(
                            value.cod + ' | ' + value.descripcion));
                    });
                }).fail(function() {
                    console.log("Error");
                });
            }else if (asunto == 'artilleria') {
               $('#artilleria').show();
                 $('#armas').hide();
                $('#municiones').hide();
                $('#ordenpublico').hide();
                $('#explosivos').hide();
                $('#equipos').hide();
                               

                var urlArtilleriaA = "{{ url('/administracion/artilleria') }}";
                // console.log(urlArtilleriaA);
                $.get(urlArtilleriaA, function(data, status) {
                    // console.log(data);
                    var $el = $("#aarea");
                    $el.empty(); // remove old options
                    $el.append($("<option selected disabled></option>").text(
                        'SELECCIONE UNA ARTILLERÍA'));
                    $.each(data, function(key, value) {
                        $el.append($("<option></option>").attr("value", value.id).text(
                            value.descripcion));
                    });
                }).fail(function() {
                    console.log("Error");
                });
            }
            
        }

        function acc(opcions){
            if (opcions == 'si'){
                $('#accesorios').show();
                var urlAccesorios = "{{ url('/administracion/formularioacc') }}";
                // console.log(urlArtilleriaA);
                $.get(urlAccesorios, function(data, status) {
                    // console.log(data);
                    var $el = $("#selecaccesorios");
                    $el.empty(); // remove old options
                    $el.append($("<option selected disabled></option>").text(
                        'SELECCIONE UN ACCESORIO'));
                    $.each(data, function(key, value) {
                        $el.append($("<option></option>").attr("value", value.id).text(
                            value.descripcion));
                    });
                }).fail(function() {
                    console.log("Error");
                });
            }

        }
    </script>


    <script type="text/javascript">
        $(function() {
            $('.busqueda').select2({
                // el buscador se ejecuta dentro del modal para que todo se inicialice
                dropdownParent: $('#creacion')
            });

            $('#btn-creacion').on('click', function() {
                event.preventDefault();
                var datos = "{{ url('/extras/personas') }}";

                var urlasuntos = "{{ url('/extras/asuntos') }}";
                $.get(urlasuntos, function(data, status) {
                    var $asu = $("#asuntos");
                    $asu.empty(); // remove old options
                    $asu.append($("<option selected disabled></option>").text(
                        'SELECCIONE UN ASUNTO'));
                    $.each(data, function(key, value) {
                        $asu.append($("<option></option>").attr("value", value.nombre).text(
                            value.nombre));
                    });
                }).fail(function() {
                    console.log("Error");
                });

                $.get(datos, function(data, status) {
                    var $busqueda = $('#busqueda');
                    var $busqueda2 = $('#busqueda2');
                    var $busqueda3 = $('#busqueda3');
                    var $busqueda4 = $('#busqueda4');

                    $busqueda.empty(); // remove old options
                    $busqueda.append($("<option selected disabled></option>").text(
                        'SELECCIONE UNA PERSONA'));
                    $busqueda2.append($("<option selected disabled></option>").text(
                        'SELECCIONE UNA PERSONA'));
                    $busqueda3.append($("<option selected disabled></option>").text(
                        'SELECCIONE UNA PERSONA'));
                    $busqueda4.append($("<option selected disabled></option>").text(
                        'SELECCIONE UNA PERSONA'));
                    $.each(data, function(key, value) {
                        $busqueda.append($("<option></option>").attr("value", value.id)
                            .text(value.CI + ' - ' + value.nombres));
                        $busqueda2.append($("<option></option>").attr("value", value.id)
                            .text(value.CI + ' - ' + value.nombres));
                        $busqueda3.append($("<option></option>").attr("value", value.id)
                            .text(value.CI + ' - ' + value.nombres));
                        $busqueda4.append($("<option></option>").attr("value", value.id)
                            .text(value.CI + ' - ' + value.nombres));
                    });
                }).fail(function() {
                    console.log("Error");
                });
            });
        });
    </script>
@endsection
