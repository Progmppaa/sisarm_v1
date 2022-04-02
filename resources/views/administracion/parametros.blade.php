@extends("theme.$theme.layout")
@section('titulo')
    Parámetros
@stop
@section('styles')

@stop
@section('contenido')

<div class="container-fluid">
    <div class="row pt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3  class="d-inline">Listado de Parámetros de Armamentos</h3>
                    {{-- <button class="d-inline btn btn-info shadow float-right" id="btn-creacion" 
                        data-toggle="modal" data-target="#creacion" name="Agregar Producto">
                        Nuevo Parámetro
                    </button> --}}
                </div>
                <div class="tab-pane fade show active" id="custom-tabs-four-corE" style="margin:10px">
                    <div class="correspondencia_wrapper dataTables_wrapper dt-bootstrap4">
                      <div class="row">
                        <div  class="col-md-12">
                            <table class="correspondencia table table-bordered table-striped dataTable dtr-inline" >
                              <thead  class="text-center text-white" style="background-color:#6A0304">
                            <tr>                                
                                {{-- <th>Nomenclatura</th> --}}
                                <th>Responsable</th>
                                <th>Cargo</th>
                                <th>Acciones</th>
                                {{-- <th>CI</th> --}}
                                {{-- <th>Grado</th> --}}
                            </tr>
                        </thead>
                      

                        <tbody class="text-center">
                            @foreach ($parametros as $parametro)
                            <tr>
                                {{-- <td>{{ $parametro->nomenclatura }}</td> --}}
                                <td>{{ $parametro->grado . ' ' . $parametro->nombres . ' '. $parametro->apellidos }}</td>
                                {{-- <td>{{ $parametro->CI }}</td> --}}
                                {{-- <td>{{ $parametro->grado }}</td> --}}
                                <td>{{ $parametro->cargo }}</td>

                                <td>
                            <a href="{{ route('parametros_edit',$parametro->id) }}" onclick="return editSeg();" class=" btn btn-info">
                            Actualizar
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

<div class="container-fluid">
    <div class="row pt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3  class="d-inline">Listado de Parámetros de Municiones</h3>
                    {{-- <button class="d-inline btn btn-info shadow float-right" id="btn-creacion" 
                        data-toggle="modal" data-target="#creacion" name="Agregar Producto">
                        Nuevo Parámetro
                    </button> --}}
                </div>
                <div class="tab-pane fade show active" id="custom-tabs-four-corE" style="margin:10px">
                    <div class="correspondencia_wrapper dataTables_wrapper dt-bootstrap4">
                      <div class="row">
                        <div  class="col-md-12">
                            <table class="correspondencia table table-bordered table-striped dataTable dtr-inline" >
                              <thead  class="text-center text-white" style="background-color:#6A0304">
                            <tr>                                
                                {{-- <th>Nomenclatura</th> --}}
                                <th>Responsable</th>
                                <th>Cargo</th>
                                <th>Acciones</th>
                                {{-- <th>CI</th> --}}
                                {{-- <th>Grado</th> --}}
                            </tr>
                        </thead>
                      

                        {{-- <tbody class="text-center">
                            @foreach ($parametros as $parametro)
                            <tr> --}}
                                {{-- <td>{{ $parametro->nomenclatura }}</td> --}}
                                {{-- <td>{{ $parametro->grado . ' ' . $parametro->nombres . ' '. $parametro->apellidos }}</td> --}}
                                {{-- <td>{{ $parametro->CI }}</td> --}}
                                {{-- <td>{{ $parametro->grado }}</td> --}}
                                {{-- <td>{{ $parametro->cargo }}</td> --}}

                                {{-- <td>
                            <a href="{{ route('parametros_edit',$parametro->id) }}" onclick="return editSeg();" class=" btn btn-info">
                            Actualizar
                            </a>
                            
                            </td>
                            </tr>
                            @endforeach
                        </tbody> --}}
                    </table>
                </div>
            </div>
        </div> 
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row pt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3  class="d-inline">Listado de Parámetros de Orden Público</h3>
                    {{-- <button class="d-inline btn btn-info shadow float-right" id="btn-creacion" 
                        data-toggle="modal" data-target="#creacion" name="Agregar Producto">
                        Nuevo Parámetro
                    </button> --}}
                </div>
                <div class="tab-pane fade show active" id="custom-tabs-four-corE" style="margin:10px">
                    <div class="correspondencia_wrapper dataTables_wrapper dt-bootstrap4">
                      <div class="row">
                        <div  class="col-md-12">
                            <table class="correspondencia table table-bordered table-striped dataTable dtr-inline" >
                              <thead  class="text-center text-white" style="background-color:#6A0304">
                            <tr>                                
                                {{-- <th>Nomenclatura</th> --}}
                                <th>Responsable</th>
                                <th>Cargo</th>
                                <th>Acciones</th>
                                {{-- <th>CI</th> --}}
                                {{-- <th>Grado</th> --}}
                            </tr>
                        </thead>
                      

                        {{-- <tbody class="text-center">
                            @foreach ($parametros as $parametro)
                            <tr> --}}
                                {{-- <td>{{ $parametro->nomenclatura }}</td> --}}
                                {{-- <td>{{ $parametro->grado . ' ' . $parametro->nombres . ' '. $parametro->apellidos }}</td> --}}
                                {{-- <td>{{ $parametro->CI }}</td> --}}
                                {{-- <td>{{ $parametro->grado }}</td> --}}
                                {{-- <td>{{ $parametro->cargo }}</td> --}}

                                {{-- <td>
                            <a href="{{ route('parametros_edit',$parametro->id) }}" onclick="return editSeg();" class=" btn btn-info">
                            Actualizar
                            </a>
                            
                            </td>
                            </tr>
                            @endforeach
                        </tbody> --}}
                    </table>
                </div>
            </div>
        </div> 
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row pt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3  class="d-inline">Listado de Parámetros de Explosivos</h3>
                    {{-- <button class="d-inline btn btn-info shadow float-right" id="btn-creacion" 
                        data-toggle="modal" data-target="#creacion" name="Agregar Producto">
                        Nuevo Parámetro
                    </button> --}}
                </div>
                <div class="tab-pane fade show active" id="custom-tabs-four-corE" style="margin:10px">
                    <div class="correspondencia_wrapper dataTables_wrapper dt-bootstrap4">
                      <div class="row">
                        <div  class="col-md-12">
                            <table class="correspondencia table table-bordered table-striped dataTable dtr-inline" >
                              <thead  class="text-center text-white" style="background-color:#6A0304">
                            <tr>                                
                                {{-- <th>Nomenclatura</th> --}}
                                <th>Responsable</th>
                                <th>Cargo</th>
                                <th>Acciones</th>
                                {{-- <th>CI</th> --}}
                                {{-- <th>Grado</th> --}}
                            </tr>
                        </thead>
                      

                        {{-- <tbody class="text-center">
                            @foreach ($parametros as $parametro)
                            <tr> --}}
                                {{-- <td>{{ $parametro->nomenclatura }}</td> --}}
                                {{-- <td>{{ $parametro->grado . ' ' . $parametro->nombres . ' '. $parametro->apellidos }}</td> --}}
                                {{-- <td>{{ $parametro->CI }}</td> --}}
                                {{-- <td>{{ $parametro->grado }}</td> --}}
                                {{-- <td>{{ $parametro->cargo }}</td> --}}

                                {{-- <td>
                            <a href="{{ route('parametros_edit',$parametro->id) }}" onclick="return editSeg();" class=" btn btn-info">
                            Actualizar
                            </a>
                            
                            </td>
                            </tr>
                            @endforeach
                        </tbody> --}}
                    </table>
                </div>
            </div>
        </div> 
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row pt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3  class="d-inline">Listado de Parámetros de Óptico y Optrópico</h3>
                    {{-- <button class="d-inline btn btn-info shadow float-right" id="btn-creacion" 
                        data-toggle="modal" data-target="#creacion" name="Agregar Producto">
                        Nuevo Parámetro
                    </button> --}}
                </div>
                <div class="tab-pane fade show active" id="custom-tabs-four-corE" style="margin:10px">
                    <div class="correspondencia_wrapper dataTables_wrapper dt-bootstrap4">
                      <div class="row">
                        <div  class="col-md-12">
                            <table class="correspondencia table table-bordered table-striped dataTable dtr-inline" >
                              <thead  class="text-center text-white" style="background-color:#6A0304">
                            <tr>                                
                                {{-- <th>Nomenclatura</th> --}}
                                <th>Responsable</th>
                                <th>Cargo</th>
                                <th>Acciones</th>
                                {{-- <th>CI</th> --}}
                                {{-- <th>Grado</th> --}}
                            </tr>
                        </thead>
                      

                        {{-- <tbody class="text-center">
                            @foreach ($parametros as $parametro)
                            <tr> --}}
                                {{-- <td>{{ $parametro->nomenclatura }}</td> --}}
                                {{-- <td>{{ $parametro->grado . ' ' . $parametro->nombres . ' '. $parametro->apellidos }}</td> --}}
                                {{-- <td>{{ $parametro->CI }}</td> --}}
                                {{-- <td>{{ $parametro->grado }}</td> --}}
                                {{-- <td>{{ $parametro->cargo }}</td> --}}

                                {{-- <td>
                            <a href="{{ route('parametros_edit',$parametro->id) }}" onclick="return editSeg();" class=" btn btn-info">
                            Actualizar
                            </a>
                            
                            </td>
                            </tr>
                            @endforeach
                        </tbody> --}}
                    </table>
                </div>
            </div>
        </div> 
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row pt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3  class="d-inline">Listado de Parámetros de Artillería Aerea</h3>
                    {{-- <button class="d-inline btn btn-info shadow float-right" id="btn-creacion" 
                        data-toggle="modal" data-target="#creacion" name="Agregar Producto">
                        Nuevo Parámetro
                    </button> --}}
                </div>
                <div class="tab-pane fade show active" id="custom-tabs-four-corE" style="margin:10px">
                    <div class="correspondencia_wrapper dataTables_wrapper dt-bootstrap4">
                      <div class="row">
                        <div  class="col-md-12">
                            <table class="correspondencia table table-bordered table-striped dataTable dtr-inline" >
                              <thead  class="text-center text-white" style="background-color:#6A0304">
                            <tr>                                
                                {{-- <th>Nomenclatura</th> --}}
                                <th>Responsable</th>
                                <th>Cargo</th>
                                <th>Acciones</th>
                                {{-- <th>CI</th> --}}
                                {{-- <th>Grado</th> --}}
                            </tr>
                        </thead>
                      

                        {{-- <tbody class="text-center">
                            @foreach ($parametros as $parametro)
                            <tr> --}}
                                {{-- <td>{{ $parametro->nomenclatura }}</td> --}}
                                {{-- <td>{{ $parametro->grado . ' ' . $parametro->nombres . ' '. $parametro->apellidos }}</td> --}}
                                {{-- <td>{{ $parametro->CI }}</td> --}}
                                {{-- <td>{{ $parametro->grado }}</td> --}}
                                {{-- <td>{{ $parametro->cargo }}</td> --}}

                                {{-- <td>
                            <a href="{{ route('parametros_edit',$parametro->id) }}" onclick="return editSeg();" class=" btn btn-info">
                            Actualizar
                            </a>
                            
                            </td>
                            </tr>
                            @endforeach
                        </tbody> --}}
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