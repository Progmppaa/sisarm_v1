@extends("theme.$theme.layout")
@section('titulo')
    Parametros
@stop
@section('styles')

@stop
@section('contenido')
<div class="container">

    <div class="row pt-4">
        <div class="col-12">
            <form class="form-horizontal p-5"  method="POST"  style="margin-left:25%"
                action="{{ route('parametros_actualizar', $parametro->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                 <label class="col-2 m-2">Nomenclatura</label>
                       <input type="text" name="nomenclatura" class="form-control col-4"
                        value="{{ $parametro->nomenclatura }}">
                </div>

                <div class="form-group row">
                    <label class=" col-2 m-2">Grado</label>
                    <select class="form-control col-4" name="grado" id="grados" value="{{ $parametro->grado }}"
                    <label class=" col-2">Grado</label>
                    <select class="form-control col-3" name="grado" id="grados" value="{{ $parametro->grado }}"
                        style=" text-transform: uppercase;">
                    </select>
                </div>

                <div class="form-group row">

                    <label class="col-2 m-2">Nombres</label>
                    <input type="text" name="nombres" class="form-control col-4" value="{{ $parametro->nombres }}">
                </div>

                <div class="form-group row">
                    <label class="col-2 m-2">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control col-4" value="{{ $parametro->apellidos }}">
                </div>

                <div class="form-group row">
                    <label class="col-2 m-2">Cédula</label>
                    <input type="text" name="CI" class="form-control col-4" value="{{ $parametro->CI }}">
                </div>

                <div class="form-group row">
                    <label class="col-2 m-2">Cargo</label>
                    <input type="text" name="cargo" class="form-control col-4" value="{{ $parametro->cargo }}">
                </div>

                <div class="form-group row">
                    <div>
                        <button class="btn btn-info mr-2" type="submit">Actualizar</button>
                    </div>
                    <div>
                        <a href="{{ route('parametros') }}" class="btn btn-danger" type="submit">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    {{-- Fin de Modal --}}
@stop
@section('scripts')
    <script>
        $(function() {
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
    </script>
@endsection
