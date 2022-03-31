@extends("theme.$theme.layout")
@section('titulo')
    Parámetros
@stop
@section('styles')

@stop
@section('contenido')
    <div class="container pt-5 w-50 align-items-left">

        <div class="row card  shadow p-3 mb-5 rounded" style="background: rgb(235, 235, 235)">
            <div class="col-12">
                <form class="form-horizontal pt-5" method="POST" style="margin-left:10%"
                    action="{{ route('parametros_actualizar', $parametro->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-4 m-2">Nomenclatura</label>
                        <input type="text" name="nomenclatura" class="form-control col-6"
                            value="{{ $parametro->nomenclatura }}">
                    </div>

                    <div class="form-group row">
                        <label class=" col-4 m-2">Grado</label>
                            <select class="form-control col-6" name="grado" id="grados" value="{{ $parametro->grado }}"
                                style=" text-transform: uppercase;">
                            </select>
                    </div>

                    <div class="form-group row">

                        <label class="col-4 m-2">Nombres</label>
                        <input type="text" name="nombres" class="form-control col-6" value="{{ $parametro->nombres }}">
                    </div>

                    <div class="form-group row">
                        <label class="col-4 m-2">Apellidos</label>
                        <input type="text" name="apellidos" class="form-control col-6"
                            value="{{ $parametro->apellidos }}">
                    </div>

                    <div class="form-group row">
                        <label class="col-4 m-2">Cédula</label>
                        <input type="text" name="CI" class="form-control col-6" value="{{ $parametro->CI }}">
                    </div>

                    <div class="form-group row">
                        <label class="col-4 m-2 pb-2">Cargo</label>
                        <input type="text" name="cargo" class="form-control col-6" value="{{ $parametro->cargo }}">
                    </div>



                    <div class="container-fluid "> 
                        <div class="row w-100 align-items-center">
                            <div class="col text-center pb-5">
                                <button class="btn bg-gradient-info" type="submit">Actualizar</button>
                                <a href="{{ route('parametros') }}" class="btn bg-gradient-danger ml-2" type="submit">Cancelar</a>

                            </div>	
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
