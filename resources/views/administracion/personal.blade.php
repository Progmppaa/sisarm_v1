@extends("theme.$theme.layout")
@section('titulo')
    Personal
@stop
@section('styles')

@stop
@section('contenido')
{{--  Modal Agregar personal --}}
<div class="modal fade" id="creacion" tabindex="-1" role="dialog" aria-labelledby="creacionLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content px-3 pb-0">
            <div class="modal-header row d-inline ml-2">
                <button type="button" class="close mt-1 mr-1 p-0" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center ml-4">Ingrese Correctamente Los Datos</h4>
            </div>
            <div class="modal-body text-center">
                <form class="form-horizontal" role="form" method="POST" action="{{route('personal-store')}}" enctype="multipart/form-data"  id="form-nuevo">
                    @csrf
                    <div class="form-group row">
                        <label for="titulo" class="col-3">CI</label>
                        <input type="text" name="CI" class="form-control col">
                    </div>
                    <div class="form-group row">
                        <label for="titulo" class="col-3">Nombres</label>
                        <input type="text" name="nombres" class="form-control col">
                    </div>
                    <div class="form-group row">
                        <label for="titulo" class="col-3">Apellidos</label>
                        <input type="text" name="apellidos" class="form-control col">
                    </div>
                    <div class="form-group row">
                        <label for="dependencia" class="d-inline col-3">Dependencia</label>
                        <select class="form-control col" name="dependencia" id="dependencias"
                        style=" text-transform: uppercase;">
                     </select>
                    </div>

                    <div class="form-group row">
                        <label for="titulo" class="col-3">Destacamento</label>
                        <select class="form-control col" name="nombre" id="destacamentos"
                        style=" text-transform: uppercase;">
                        </select>
                    </div>

                    <div class="form-group row">
                        <label for="titulo" class="col-3">Compañía</label>
                        <select class="form-control col" name="nombre" id="companias"
                        style=" text-transform: uppercase;">
                        </select>
                    </div>
                   
                    <div class="form-group row">
                        <label for="titulo" class="d-inline col-3">Grado</label>
                        <select class="form-control col" name="nombre" id="grados"
                        style=" text-transform: uppercase;">
                        </select>
                    </div>
                    
                    <div class="form-group row">
                        <label for="telefono" class="d-inline col-3">Teléfono</label>
                        <input type="text" name="telefono" class="form-control col">
                    </div>
                    <div class="modal-footer row my-3 pt-3">
                        <div class="col">
                            <button type="submit" class="btn btn-primary" id="btn-nuevo">
                                Agregar
                            </button>
                        </div>
                        <input class="btn bg-info" type="reset" value="Limpiar">
                        <div class="col">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">
                                Cancelar
                            </button>
                        </div>
                    </div>
                </form>
                {{$success = Session::get('success')}}
                @if ($success)
                    <div class="alert alert-success">
                        <strong>!!Felicidades!!</strong>Se Creó el Personal Correctamente <br><br>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
{{--  Fin de Modal  --}}

<div class="container-fluid">
    <div class="row pt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3  class="d-inline">Listado Del Personal</h3>
                    <button class="d-inline btn btn-info shadow float-right" id="btn-creacion" 
                        data-toggle="modal" data-target="#creacion" name="Agregar Producto">
                        Agregar Persona
                    </button>
                </div>
                <div class="tab-pane fade show active" id="custom-tabs-four-corE" role="tabpanel" aria-labelledby="custom-tabs-four-corE-tab" style="margin:10px">
                    <div class="correspondencia_wrapper dataTables_wrapper dt-bootstrap4">
                      <div class="row">
                        <div  class="col-md-12">
                            <table class="correspondencia table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="enviadosA_info">
                              <thead  class="text-center text-white" style="background-color:#6A0304">
                {{-- <div class="card-body">
                    <table id="notas" class="table table-bordered table-striped">
                        <thead class="text-center text-white" style="background-color:#6A0304"> --}}
                            <tr>
                                <th>CI</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Dependencia</th>
                                <th>Destacamento</th>
                                <th>Compañía</th>
                                <th>Grado</th>
                                <th>Teléfono</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($personal as $personal)
                            <tr>
                                <td>{{ $personal->CI }}</td>
                                <td>{{ $personal->nombres }}</td>
                                <td>{{ $personal->apellidos }}</td>
                                <td>{{ $personal->dependencia }}</td>
                                <td>{{ $personal->destacamento }}</td>
                                <td>{{ $personal->compañia }}</td>
                                <td>{{ $personal->grado }}</td>
                                <td>{{ $personal->telefono }}</td>
                                <td>
                            <form action="{{ route('personal-destroy',$personal->id) }}" method="POST">
                            <a href="{{ route('personal-edit',$personal->id) }}" onclick="return editSeg();" class=" btn btn-info">
                            Editar
                            </a>                                  
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return deleteSeg();">Borrar</button>
                            </form>
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
    </div>
</div>

@stop
@section('scripts')
<script>
    function deleteSeg() {
        if(!confirm("¿Está usted seguro de querer eliminar este registro?"))
        event.preventDefault();
    }
    function editSeg() {
        if(!confirm("¿Quiere usted editar este registro?"))
        event.preventDefault();
    }

    $(function () {
        $(".correspondencia").DataTable({
            "responsive": true, 
            "lengthChange": true, 
            "autoWidth": false,
            "searching": true,
            "ordering": true,
            "info": true,
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).container().appendTo('.correspondencia_wrapper .col-md-6:eq(0)');
      });

      $(function() {
        $('#btn-creacion').on('click', function() {
            event.preventDefault();
            var urlDependencia = "{{ url('/administracion/comandos_de_zona') }}";
            //   dependencia
            $.get(urlDependencia, function(data, status) {
                var $el = $("#dependencias");
                $el.empty(); // remove old options
                $el.append($("<option selected disabled></option>").text('SELECCIONE UN COMANDO DE ZONA'));
                $.each(data, function(key, value) {
                    $el.append($("<option></option>").attr("value", value.nombre).text(value.nombre));
                });
                console.log(data);
            }).fail(function() {
                console.log("Error");
            });

            var urlDestacamento = "{{ url('/administracion/destacamentos') }}";
            //   dependencia
            $.get(urlDestacamento, function(data, status) {
                var $el = $("#destacamentos");
                $el.empty(); // remove old options
                $el.append($("<option selected disabled></option>").text('SELECCIONE UN DESTACAMENTO'));
                $.each(data, function(key, value) {
                    $el.append($("<option></option>").attr("value", value.nombre).text(value.nombre));
                });
                console.log(data);
            }).fail(function() {
                console.log("Error");
            });

            var urlcompania = "{{ url('/administracion/companias') }}";
            //   dependencia
            $.get(urlcompania, function(data, status) {
                var $el = $("#companias");
                $el.empty(); // remove old options
                $el.append($("<option selected disabled></option>").text('SELECCIONE UN COMPAÑIA'));
                $.each(data, function(key, value) {
                    $el.append($("<option></option>").attr("value", value.nombre).text(value.nombre));
                });
                console.log(data);
            }).fail(function() {
                console.log("Error");
            });

            var urlgrado = "{{ url('/grado') }}";
            //   dependencia
            $.get(urlgrado, function(data, status) {
                var $el = $("#grados");
                $el.empty(); // remove old options
                $el.append($("<option selected disabled></option>").text('SELECCIONE UN GRADO'));
                $.each(data, function(key, value) {
                    $el.append($("<option></option>").attr("value", value.grado).text(value.grado));
                });
                console.log(data);
            }).fail(function() {
                console.log("Error");
            });
        });
    });
</script>
@endsection