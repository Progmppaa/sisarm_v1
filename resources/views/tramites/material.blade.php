@extends("theme.$theme.layout")
@section('titulo')
    Movimiento de Material
@stop
@section('styles')
<script language="JavaScript">
    function aggProd() {
        var p = document.querySelector(".material");
        var p_prime = p.cloneNode(true);
        document.getElementById('materiales').appendChild(p_prime);
       
    }
    //Función eliminar elemento
    function eliminar_elemento(valor){
        var elementos = document.getElementById('materiales');
        var vm = 0;
        console.log(vm,'inicio');
        var vm = elementos.children.length;
        console.log(vm,'cuenta');

        if (vm >= 2) {
            console.log(vm,'if');
            valor.parentNode.parentNode.removeChild(valor.parentNode);
            var vm = elementos.children.length;
            console.log(vm,'end if');
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
    <div class="modal fade" id="creacion" tabindex="-1" role="dialog" aria-labelledby="creacionLabel"
        style="text-transform: uppercase;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content px-3 pb-0">
                <div class="modal-header row d-inline ml-2">
                    <button type="button" class="close mt-1 mr-1 p-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> 
                    <h4 class="modal-title text-center ml-4">Movimiento de Material de Guerra</h4>
                </div>
                
                <div class="modal-body text-center">
                    <form  class="form-horizontal" role="form" method="POST"
                        action="{{ route('material-store') }}" enctype="multipart/form-data" id="form-nuevo">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">                
                                <div class="form-group">
                                    <label for="destinatario">ASUNTO:</label>
                                    <select class=" form-control buscador col" name="asunto" onchange="mPersonals(this.value);" required>
                                        <option selected disabled>SELECCIONE UNA OPCIÓN</option>
                                        <option value="DOTACION ORGANICA">DOTACIÓN ORGÁNICA</option>
                                        <option value="ASIGNACION">ASIGNACIÓN</option>
                                        <option value="REEMPLAZO">REEMPLAZO</option>
                                        <option value="REPARACION">REPARACIÓN</option>
                                        <option value="MISION DE ESTUDIOS">MISIÓN DE ESTUDIOS</option>
                                        <option value="DESINCORPORACION">DESINCORPORACIÓN</option>
                                        <option value="REINTEGRO">REINTEGRO</option>
                                        <option value="DEVOLUCION">DEVOLUCIÓN</option>
                                        <option value="OTROS">OTROS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="remitente">DEL:</label>
                                    <select class="form-control buscador " name="remitente" id="busqueda" required></select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="destinatario">AL:</label>
                                    <select class="form-control buscador" name="destinatario" id="busqueda2" required></select>
                                </div>
                            </div>
                        </div>
                        <div class="card elevation-2">
                            <div class="card-header">
                                <b>Armas</b>
                            </div>
                            <div class="card-body">
                                <div class="row form-group" id="materiales">
                                    <div class="material row ">
                                        <div class="col-md-5 p-2 ">
                                            <select class="form-control" name="armas[]" id="armamentos" style=" text-transform: uppercase; width:100% !important;" required></select>
                                        </div>
                                        <div class="col-md-5 p-2">
                                            <input id="serial" class="form-control " type="text" name="serial[]" style="text-transform: uppercase;" placeholder="serial" required/>
                                        </div>
                                        <a class="col-md-1 p-2" onclick="eliminar_elemento(this)">
                                            <span class="btn btn-danger"><i class="fas fa-minus"></i></span>
                                        </a>
                                        <a class="col-md-1 p-2" onclick="aggProd();">
                                            <span class="btn btn-primary"><i class="fas fa-plus"></i></span>
                                        </a>
                                    
                        <div class="row form-group ">
                            
                            <label class="col-4">Cargadores</label>
                            <input type="number" name="cargadores[]" min="1" class="form-control col-1" placeholder="1" required>
                            <label class="col-4">Cartuchos</label>
                            <input type="number" name="cartuchos[]" min="1" class="form-control col-1" placeholder="1" required>
                        </div>
                    </div>
                </div>
                </div>
                    </div>
                        <div class="modal-footer row my-3 pt-3">
                            <div class="col">
                                <button type="submit" class="btn btn-primary" id="btn-nuevo">
                                    Guardar
                                </button>
                            </div>
                            <div class="col">
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
                    <div class="card-header">
                        <h3 class="d-inline">Listado de documentos de Material de Guerra</h3>
                        <button class="d-inline btn btn-info shadow float-right" id="btn-creacion" data-toggle="modal"
                            data-target="#creacion" name="Agregar Producto">
                            Generar documento
                        </button>
                    </div>
                    <div class="card-body">
                        <table id="notas" class="table table-bordered table-striped">
                            <thead class="text-center text-white" style="background-color:#6A0304">
                                <tr>
                                    <th>NRO</th>
                                    <th>FECHA</th>
                                    <th>DEL</th>
                                    <th>AL</th>
                                    <th>ASUNTO</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($materials as $do)
                                    <tr>
                                        <td>{{ $do->nro_doc }}</td>
                                        <td>{{ $do->fecha_doc }}</td>
                                        <td> 
                                            @foreach ($persona as $datos)
                                                @if ($do->remitente == $datos->id)
                                                    {{$datos->nombres}}   
                                                @endif    
                                            @endforeach   
                                        </td>
                                        <td>
                                            @foreach ($persona as $datos)
                                                @if ($do->destinatario == $datos->id)
                                                    {{$datos->nombres}}   
                                                @endif    
                                            @endforeach 
                                        </td>
                                        <td>{{ $do->asunto }}</td>
                                        <td>
                                            <a href="{{ route('print_mg', $do->id) }}" onclick="return editSeg();"class="btn btn-info">
                                                Visualizar
                                            </a>
                                            <a href="{{ route('delete_doc', $do->id) }}" onclick="return deleteSeg();" class="btn btn-danger">
                                                Borrar
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
        function deleteSeg() {
            if(!confirm("¿Está usted seguro de querer eliminar este registro?"))
            event.preventDefault();
        }
    </script>
    <script>
        $(function() {
            $('.busqueda').select2({
                // el buscador se ejecuta dentro del modal para que todo se inicialice
                dropdownParent: $('#creacion')
            });

            $('#btn-creacion').on('click', function() {
                event.preventDefault();
                var datos= "{{ url('extras/personas')}}";
                var urlArmamentos = "{{ url('extras/armas') }}";
                $.get(urlArmamentos, function(data, status) {
                    var $el = $("#armamentos");
                    $el.empty(); // remove old options
                    $el.append($("<option selected disabled></option>").text('SELECCIONE UNA ARMA'));
                    $.each(data, function(key, value) {
                        $el.append($("<option></option>").attr("value", value.nombre).text(value.nombre + ' | ' + value.modelo));
                    });
                }).fail(function() {
                    console.log("Error");
                });

                $.get(datos, function(data, status){
                var $busqueda = $('#busqueda');
                var $busqueda2 = $('#busqueda2');
                
                $busqueda.empty(); // remove old options
                $busqueda.append($("<option selected disabled></option>").text('SELECCIONE UNA PERSONA'));
                $busqueda2.append($("<option selected disabled></option>").text('SELECCIONE UNA PERSONA'));
                $.each(data, function(key,value) {
                    $busqueda.append($("<option></option>").attr("value", value.id).text(value.CI + ' - ' + value.nombres));
                    $busqueda2.append($("<option></option>").attr("value", value.id).text(value.CI + ' - ' + value.nombres));
                    });
                }).fail(function() {
                    console.log("Error");
                });    
            });
        });
    </script>
@endsection
