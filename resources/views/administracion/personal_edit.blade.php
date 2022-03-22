@extends("theme.$theme.layout")
@section('titulo')
    Personal
@stop
@section('styles')

@stop
@section('contenido')

    <div class="row-col" style="text-transform: uppercase;margin-left:25%">
            <form class="form-horizontal p-5" action="{{ route('personal-actualizar', $personal->id) }}" method="POST">
                @csrf
                {{-- @method('PUT') --}}
                <div class="form-group row">
                    <label for="titulo" class="col-2">Cédula</label>
                    <input type="text" name="CI" class="form-control col-4" value="{{ $personal->CI }}">
                </div>
                <div class="form-group row">
                    <label for="titulo" class="col-2">Nombres</label>
                    <input type="text" name="nombres" class="form-control col-4" value="{{ $personal->nombres }}">
                </div>
                <div class="form-group row">
                    <label for="titulo" class="col-2">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control col-4" value="{{ $personal->apellidos }}">
                </div>
                <div class="form-group row">
                    <label for="titulo" class="col-2">Fecha de Nacimiento</label>
                    <input type="text" name="Fe_nac" class="form-control col-4" value="{{ $personal->Fe_nac }}">
                </div>

                <div class="form-group row">
                    <label class="col-2">Dependencia</label>
                    <select class="form-control col-4" name="dependencia" id="dependencias"
                        onchange="mDestacamento(this.value);" value="{{ $personal->dependencia }}"
                        style=" text-transform: uppercase;">
                    </select>
                </div>
                <div class="form-group row" id="id_dest" style="display: none;">
                    <label class="col-2">Destacamento</label>
                    <select class="form-control col-4" onchange="mCompania(this.value);" name="destacamento"
                        id="destacamentos" value="{{ $personal->destacamento }}" style=" text-transform: uppercase;">
                    </select>
                </div>
                <div class="form-group row" id="id_comp" style="display: none;">
                    <label class="col-2">Compañía</label>
                    <select class="form-control col-4" name="compania" id="companias" value="{{ $personal->compania }}"
                        style=" text-transform: uppercase;">
                    </select>
                </div>

                <div class="form-group row">
                    <label class=" col-2">Grado</label>
                    <select class="form-control col-4" name="grado" id="grados" value="{{ $personal->grado }}"
                        style=" text-transform: uppercase;">
                    </select>
                </div>

                <div class="form-group row">
                    <label class=" col-2">Teléfono</label>
                    <input type="text" name="telefono" class="form-control col-4" value="{{ $personal->telefono }}">
                </div>
                <div class="form-group row">
                    <label class=" col-2">Nro. de Carnet</label>
                    <input type="text" name="nro_carnet" class="form-control col-4" value="{{ $personal->nro_carnet }}">
                </div>
                <div class="form-group row">
                    <label class=" col-2">Promoción</label>
                    <input type="text" name="promo" class="form-control col-4" value="{{ $personal->promo }}">
                </div>

                <div class="form-group row">
                    <div>
                        <button class="btn btn-info mr-2" type="submit">Guardar</button>
                    </div>
                    <div>
                        <a href="/administracion/personal" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </form>
    </div>
@stop
@section('scripts')
    <script>
        $(function() {
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

        function mDestacamento(id) {
            if (id) {
                $("#id_dest").show();
                var urlDestacamento = "{{ url('/administracion/destacamentos') }}";
                $.get(urlDestacamento, function(data, status) {
                    var $el = $("#destacamentos");
                    $el.empty(); // remove old options
                    $el.append($("<option selected disabled></option>").text('SELECCIONE UN DESTACAMENTO'));
                    $.each(data, function(key, value) {
                        if (id == value.id_comando) {
                            $el.append($("<option></option>").attr("value", value.id).text(value.nombre));
                        };
                    });
                    console.log(data);
                }).fail(function() {
                    console.log("Error");
                });
            } else {
                $("#id_dest").hide();
            }
        };

        function mCompania(id) {
            if (id) {
                $("#id_comp").show();
                var urlcompania = "{{ url('/administracion/companias') }}";
                $.get(urlcompania, function(data, status) {
                    var $el = $("#companias");
                    $el.empty(); // remove old options
                    $el.append($("<option selected disabled></option>").text('SELECCIONE UNA COMPAÑIA'));
                    $.each(data, function(key, value) {
                        if (id == value.id_destacamento) {
                            $el.append($("<option></option>").attr("value", value.id).text(value.nombre));
                        };
                    });
                    console.log(data);
                }).fail(function() {
                    console.log("Error");
                });
            } else {
                $("#id_id_comp").hide();
            }
        }
    </script>

@endsection
