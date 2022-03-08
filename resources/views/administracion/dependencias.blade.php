@extends("theme.$theme.layout")
@section('titulo')
    Dependencias
@stop
@section('styles')

@stop
@section('contenido')
{{-- Modals --}}
{{-- Registro de Comando --}}
<div class="modal fade" id="comando" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content px-3 pb-0">
            <div class="modal-header row d-inline ml-2">
                <button type="button" class="close mt-1 mr-1 p-0" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center ml-4">Registro Comando de Zona</h4>
            </div>
            <div class="modal-body text-center">
                <form class="form-horizontal" role="form" method="POST" action="{{route('comando-store')}}" enctype="multipart/form-data"  id="form-comando">
                    @csrf
                    <div class="form-group row">
                        <label class="col-4">Nombre</label>
                        <input type="text" name="nombre" placeholder="PUESTO CMDO" class="form-control col" required>
                    </div>
                    <div class="form-group row">
                        <label class="d-inline col-4">Estado</label>
                        <select class="form-control col" name="id_estado" id="estados" required></select>
                    </div>
                    <div class="form-group row">
                        <label class="d-inline col-4">Descripción</label>
                        <input type="text" name="descripcion" placeholder="EDO. MAYOR" class="form-control col">
                    </div>
                    <div class="modal-footer row my-3 pt-3">
                        <div class="col">
                            <button type="submit" class="btn btn-primary busqueda" id="btn-nuevo">
                                Registrar
                            </button>
                        </div>

                        <input class="btn bg-info" type="reset" value="Limpiar">

                        <div class="col">
                            <input type="reset" value="Cancelar" class="btn btn-danger" data-dismiss="modal">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Registro de Destacamento --}}
<div class="modal fade" id="destacamento" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content px-3 pb-0">
            <div class="modal-header row d-inline ml-2">
                <button type="button" class="close mt-1 mr-1 p-0" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center ml-4">Registro de Destacamento</h4>
            </div>
            <div class="modal-body text-center">
                <form class="form-horizontal" role="form" method="POST" action="{{route('destacamento-store')}}" enctype="multipart/form-data"  id="form-destacamento">
                    @csrf
                    <div class="form-group row">
                        <label class="col-4">Nombre</label>
                        <input type="text" name="nombre" placeholder="DA-1" class="form-control col" required>
                    </div>
                    <div class="form-group row">
                        <label  class="d-inline col-4">Comando de Zona</label>
                        <select class="form-control col" name="id_comando" id="comandos" required></select>
                    </div>
                    <div class="form-group row">
                        <label class="d-inline col-4">Descripción</label>
                        <input type="text" name="descripcion" placeholder="BOLIVAR" class="form-control col">
                    </div>
                    <div class="modal-footer row my-3 pt-3">
                        <div class="col">
                            <button type="submit" class="btn btn-primary" id="btn-nuevo">
                                Registrar
                            </button>
                        </div>

                        <input class="btn bg-info" type="reset" value="Limpiar">

                        <div class="col">
                            <input type="reset" value="Cancelar" class="btn btn-danger" data-dismiss="modal">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Registro de Compañias --}}
<div class="modal fade" id="compania" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content px-3 pb-0">
            <div class="modal-header row d-inline ml-2">
                <button type="button" class="close mt-1 mr-1 p-0" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center ml-4">Registro de Compañía</h4>
            </div>
            <div class="modal-body text-center">
                <form class="form-horizontal" role="form" method="POST" action="{{route('compania-store')}}" enctype="multipart/form-data"  id="form-compania">
                    @csrf
                    <div class="form-group row">
                        <label class="col-4">Nombre</label>
                        <input type="text" name="nombre" class="form-control col" placeholder="1RA. CIA" required>
                    </div>
                    <div class="form-group row">
                        <label class="d-inline col-4">Destacamento</label>
                        <select class="form-control col" name="id_destacamento" id="destacamentos" required></select>
                    </div>
                    <div class="form-group row">
                        <label class="d-inline col-4">Descripción</label>
                        <input type="text" name="descripcion" class="form-control col" placeholder="SER. GENERAL">
                    </div>
                    <div class="modal-footer row my-3 pt-3">
                        <div class="col">
                            <button type="submit" class="btn btn-primary" id="btn-nuevo">
                                Registrar
                            </button>
                        </div>

                        <input class="btn bg-info" type="reset" value="Limpiar">

                        <div class="col">
                            <input type="reset" value="Cancelar" class="btn btn-danger" data-dismiss="modal">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Fin de Modals --}}
<div class="row mt-3">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Comandos de Zona</div>
                <a class="d-inline btn btn-info shadow float-right" id="btn-comando" data-toggle="modal" data-target="#comando">
                    Registrar Nuevo
                </a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Armas</th>
                            {{-- <th>Acciones</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comandos as $c)
                        <tr onclick="destacamentos({{$c->id}})">
                            <td>{{$c->nombre. ' - ' .$c->descripcion}}</td>
                            <td>15</td>
                            {{-- <td>
                                <a href="{{ route('comando-destroy', $c->id) }}" class="btn">
                                    <i class="fas fa-trash-alt "></i>
                                </a>
                            </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Destacamentos</div>
                <a class="d-inline btn btn-info shadow float-right" id="btn-destacamento" data-toggle="modal" data-target="#destacamento">
                    Registrar Nuevo
                </a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Armas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($destacamentos as $c)
                        <tr onclick="companias({{$c->id}})">
                            <td>{{$c->nombre. ' - ' .$c->descripcion}}</td>
                            <td>15</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Compañias</div>
                <a class="d-inline btn btn-info shadow float-right" id="btn-compania" data-toggle="modal" data-target="#compania">
                    Registrar Nuevo
                </a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Armas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companias as $c)
                        <tr>
                            <td>{{$c->nombre. ' - ' .$c->descripcion}}</td>
                            <td>15</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
@section('scripts')
<script>
    function destacamentos(id) {
        console.log("Buscar Destacamento", id)
    }
    function companias(id) {
        console.log("Buscar Compañia", id)
    }
</script>
<script>
    $(function() {
        // DATOS MODAL COMANDO DE ZONA
        $('#btn-comando').on('click', function() {
            event.preventDefault();
            var datos= "{{ url('extras/estados')}}";
            $.get(datos, function(data, status) {
                var $selector = $("#estados");
                $selector.empty();
                $selector.append($("<option selected disabled></option>").text('POR FAVOR SELECCIONE UN ESTADO'));
                $.each(data, function(key, value) {
                    $selector.append($("<option></option>").attr("value", value.id).text(value.nombre));
                });
            }).fail(function() {
                console.log("Error");
            });
            $('#estados').select2({
                dropdownParent: $('#form-comando')
            });
        });
        // DATOS MODAL DESTACAMENTO
        $('#btn-destacamento').on('click', function() {
            event.preventDefault();
            var datos= "{{ url('/administracion/comandos_de_zona')}}";
            $.get(datos, function(data, status) {
                var $selector = $("#comandos");
                $selector.empty();
                $selector.append($("<option selected disabled></option>").text('SELECCIONE UN COMANDO DE ZONA'));
                $.each(data, function(key, value)  {
                
                    $selector.append($("<option></option>").attr("value", value.id).text(value.nombre + ' - ' + value.descripcion));
                
                });
            }).fail(function() {
                console.log("Error");
            });
            $('#comandos').select2({
                dropdownParent: $('#form-destacamento')
            });
        });
        // DATOS MODAL COMPAÑIA
        $('#btn-compania').on('click', function() {
            event.preventDefault();
            var datos = "{{ url('/administracion/destacamentos')}}";
            $.get(datos, function(data, status) {
                var $selector = $("#destacamentos");
                $selector.empty();
                $selector.append($("<option selected disabled></option>").text('SELECCIONE UN DESTACAMENTO'));
                $.each(data, function(key, value) {
                   
                        $selector.append($("<option></option>").attr("value", value.id).text(value.nombre + ' - ' + value.descripcion));    
                    
                });
            }).fail(function() {
                console.log("Error");
            });
            $('#destacamentos').select2({
                dropdownParent: $('#form-compania')
            });
        });
    });
</script>
@endsection