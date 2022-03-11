@extends("theme.$theme.layout")
@section('titulo')
    Personal
@stop
@section('styles')

@stop
@section('contenido')
{{--  Modal Agregar personal --}}
<div class="modal fade" id="creacion" tabindex="-1" role="dialog" aria-labelledby="creacionLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content px-3 pb-0">
            <div class="modal-header row d-inline ml-2">
                <button type="button" class="close mt-1 mr-1 p-0" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center ml-4">Agregar nueva persona</h4>
            </div>
            <div class="modal-body text-center">
                <form class="form-horizontal" role="form" method="POST" action="{{route('personal-store')}}" enctype="multipart/form-data"  id="form-nuevo">
                    @csrf
                    <div class="form-group row">
                        <label  class="col-3">CI</label>
                        <input type="text" name="CI" class="form-control col">
                    </div>
                    <div class="form-group row">
                        <label  class="col-3">Fecha de Nacimiento</label>
                        <input type="text" name="Fe_nac" class="form-control col">
                    </div>
                    <div class="form-group row">
                        <label  class="col-3">Nombres</label>
                        <input type="text" name="nombres" class="form-control col">
                    </div>
                    <div class="form-group row">
                        <label class="col-3">Apellidos</label>
                        <input type="text" name="apellidos" class="form-control col">
                    </div>
                    <div class="form-group row">
                        <label  class="col-3">Dependencia</label>
                        <select class="form-control col" name="dependencia" id="dependencias" onchange="mDestacamento(this.value);"
                        style=" text-transform: uppercase;">
                     </select>
                    </div>
                    <div class="form-group row" id="id_dest" style="display: none;">
                        <label  class="col-3" >Destacamento</label>
                        <select class="form-control col" onchange="mCompania(this.value);" name="destacamento" id="destacamentos"
                        style=" text-transform: uppercase;">
                        </select>
                    </div>
                    <div class="form-group row" id="id_comp" style="display: none;" >
                        <label class="col-3">Compañia</label>
                        <select class="form-control col" name="compania" id="companias"
                        style=" text-transform: uppercase;">
                        </select>
                    </div>
                   
                    <div class="form-group row">
                        <label class=" col-3">Grado</label>
                        <select class="form-control col" name="grado" id="grados"
                        style=" text-transform: uppercase;">
                        </select>
                    </div>
                    
                    <div class="form-group row">
                        <label class=" col-3">Teléfono</label>
                        <input type="text" name="telefono" class="form-control col">
                    </div>
                    <div class="form-group row">
                        <label class=" col-3">Nro. de carnet</label>
                        <input type="text" name="nro_carnet" class="form-control col">
                    </div>
                    <div class="form-group row">
                        <label class=" col-3">Promo</label>
                        <input type="text" name="promo" class="form-control col">
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
                        <strong>!!Felicidades!!</strong>Se Creo el Personal Correctamente <br><br>
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
                        Nueva Persona
                    </button>
                </div>
                <div class="tab-pane fade show active" id="custom-tabs-four-corE" style="margin:10px">
                    <div class="correspondencia_wrapper dataTables_wrapper dt-bootstrap4">
                      <div class="row">
                        <div  class="col-md-12">
                            <table class="correspondencia table table-bordered table-striped dataTable dtr-inline" >
                              <thead  class="text-center text-white" style="background-color:#6A0304">
                            <tr>
                                <th>CI</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Dependencia</th>
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
                                <td>{{ $personal->grado }}</td>
                                <td>{{ $personal->telefono }}</td>
                                <td>
                            <a href="{{ route('personal-destroy',$personal->id) }}" class="btn btn-danger" onclick="return deleteSeg();">Borrar</a>  
                            <a href="{{ route('personal-edit',$personal->id) }}" onclick="return editSeg();" class=" btn btn-info">
                            Editar
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

            $.get(urlDependencia, function(data, status) {
                var $el = $("#dependencias");
                $el.empty(); // remove old options
                $el.append($("<option selected disabled></option>").text('SELECCIONE UN COMANDO DE ZONA'));
                $.each(data, function(key, value) {
                    $el.append($("<option></option>").attr("value", value.id).text(value.nombre));
                });
                console.log(data);
            }).fail(function() {
                console.log("Error");
            });
            
           
            //

           

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
    function mDestacamento(id){ 
      if (id){
        $("#id_dest").show();
        var urlDestacamento = "{{ url('/administracion/destacamentos') }}";
            $.get(urlDestacamento, function(data, status) {
                var $el = $("#destacamentos");
                $el.empty(); // remove old options
                $el.append($("<option selected disabled></option>").text('SELECCIONE UN DESTACAMENTO'));
                $.each(data, function(key, value) {
                    if (id == value.id_comando){
                    $el.append($("<option></option>").attr("value", value.id).text(value.nombre));
                    };
                });
                console.log(data);
            }).fail(function() {
                console.log("Error");
            });
      }else{
        $("#id_dest").hide();
      }
    };

    function mCompania(id){ 
      if (id){
        $("#id_comp").show();
        var urlcompania = "{{ url('/administracion/companias') }}";
            $.get(urlcompania, function(data, status) {
                var $el = $("#companias");
                $el.empty(); // remove old options
                $el.append($("<option selected disabled></option>").text('SELECCIONE UNA COMPAÑIA'));
                $.each(data, function(key, value) {
                    if (id == value.id_destacamento){
                    $el.append($("<option></option>").attr("value", value.id).text(value.nombre));
                };
                });
                console.log(data);
            }).fail(function() {
                console.log("Error");
            });
      }else{
        $("#id_id_comp").hide();
      }
    }

</script>
@endsection