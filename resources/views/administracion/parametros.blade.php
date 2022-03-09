@extends("theme.$theme.layout")
@section('titulo')
    Parametros
@stop
@section('styles')

@stop
@section('contenido')
{{--  Modal Agregar por defecto el rango para el documento --}}
<div class="modal fade" id="creacion" tabindex="-1" role="dialog" aria-labelledby="creacionLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content px-3 pb-0">
            <div class="modal-header row d-inline ml-2">
                <button type="button" class="close mt-1 mr-1 p-0" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center ml-4">Ingrese Los Datos Correctamente</h4>
            </div>
            <div class="modal-body text-center">
                <form class="form-horizontal" role="form" method="POST" action="{{route('personal-store')}}" enctype="multipart/form-data"  id="form-nuevo">
                    @csrf
                    <div class="form-group row">
                        <label  class="col-3">Rango</label>
                        <input type="text" name="rango" class="form-control col">
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
                        <label class="col-3">Firma</label>
                        <input type="text" name="apellidos" class="form-control col">
                    </div>
                    
                  
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
                                <th>Rango</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Firmas</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($personal as $personal)
                            <tr>
                                <td>{{ $personal->rango }}</td>
                                <td>{{ $personal->nombres }}</td>
                                <td>{{ $personal->apellidos }}</td>
                                <td>{{ $personal->firmas }}</td>
                                <td>
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
            var urlRango = "{{ url('#') }}";

            $.get(urlRango, function(data, status) {
                var $el = $("#rango");
                $el.empty(); // remove old options
                $el.append($("<option selected disabled></option>").text('SELECCIONE UN RANGO'));
                $.each(data, function(key, value) {
                    $el.append($("<option></option>").attr("value", value.id).text(value.nombre));
                });
                console.log(data);
            }).fail(function() {
                console.log("Error");
            });
            
                     
    });
   

   
</script>
@endsection