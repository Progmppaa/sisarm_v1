@extends("theme.$theme.layout")
@section('titulo')
    Armamentos
@stop
@section('styles')

@stop
@section('contenido')
<div class="modal fade" id="creacion" tabindex="-1" role="dialog" aria-labelledby="creacionLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content px-3 pb-0">
            <div class="modal-header row d-inline ml-2">
                <button type="button" class="close mt-1 mr-1 p-0" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center ml-4">Ingrese Las Especificaciones Del Arma</h4>
            </div>
            <div class="modal-body text-center">
                <form class="form-horizontal" role="form" method="POST" action="{{route('armamento-store')}}"enctype="multipart/form-data"  id="form-nuevo">
                    @csrf
                    <div class="form-group row">
                        <label for="titulo" class="col-3">Código</label>
                        <input type="text" name="codigo" class="form-control col">
                    </div>
                    <div class="form-group row">
                        <label for="titulo" class="col-3">Nombre</label>
                        <input type="text" name="nombre" class="form-control col">
                    </div>
                    <div class="form-group row">
                        <label for="titulo" class="col-3">Marca</label>
                        <input type="text" name="marca" class="form-control col">
                    </div>
                    <div class="form-group row">
                        <label for="titulo" class="d-inline col-3">Modelo</label>
                        <input type="text" name="modelo" class="form-control col">
                    </div>
                    <div class="form-group row">
                        <label for="titulo" class="d-inline col-3">Calibre</label>
                        <input type="text" name="calibre" class="form-control col">
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
                    <h3  class="d-inline">Lista de Armamentos</h3>
                    <button class="d-inline btn btn-info shadow float-right" id="btn-creacion" 
                        data-toggle="modal" data-target="#creacion" name="Agregar Producto">
                        Agregar un Nuevo Armamento
                    </button>
                </div>
                <div class="tab-pane fade show active" id="custom-tabs-four-corE" role="tabpanel" aria-labelledby="custom-tabs-four-corE-tab" style="margin:10px">
                    <div class="correspondencia_wrapper dataTables_wrapper dt-bootstrap4">
                      <div class="row">
                        <div  class="col-md-12">
                            <table class="correspondencia table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="enviadosA_info">
                              <thead  class="text-center text-white" style="background-color:#6A0304">
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Calibre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($armas as $armamento)
                            <tr>
                                <td>{{ $armamento->codigo }}</td>
                                <td>{{ $armamento->nombre }}</td>
                                <td>{{ $armamento->marca }}</td>
                                <td>{{ $armamento->modelo }}</td>
                                <td>{{ $armamento->calibre }}</td>
                                <td> <a class="btn btn-info" href="">Editar</a> </td>
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
</script>
@endsection