@extends("theme.$theme.layout")
@section('titulo')
    Inicio
@stop
@section('styles')

@stop
@section('contenido')
    <div class="row mt-4">
        <div class="col">
            <div class="card h-100 text-white" style="background: rgb(39, 66, 42) !important">
                <div class="card-header">
                    <strong>Armamento</strong>
                </div>
                <div class="card-body my-0 py-0 mt-4">
                    <div class="row">
                        <div class="col">
                            <h3>{{$ArmasDisp}}</h3>
                            <span>Disponible</span>
                            <h6 ><a href="/tramites/material_de_guerra" class="text-white-50">Asignar armamento</a></h6>
                        </div>
                        <div class="col">
                            <h3>0</h3>
                            <span>Asignado</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-2 text-right">
                    <a href="" class="text-white-50">Ver Inventario</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-white" style="background: rgb(201, 161, 1) !important">
                <div class="card-header">
                    <strong>Municiones</strong>
                </div>
                <div class="card-body my-0 py-0 mt-4">
                    <div class="row">
                        <div class="col">
                            <h3>0</h3>
                            <span>Disponible</span>
                            <h6 ><a href="/tramites/material_de_guerra" class="text-white-50">Asignar Municiones</a></h6>
                        </div>
                        <div class="col">
                            <h3>0</h3>
                            <span>Asignado</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-2 text-right">
                    <a href="" class="text-white-50">Ver Inventario</a>
                </div>
            </div>
        </div>
        {{-- <div class="col">
            <div class="card h-100 text-white" style="background: rgb(39, 66, 42) !important">
                <div class="card-header">
                    <strong>Cargadores</strong>
                </div>
                <div class="card-body my-0 py-0 mt-4">
                    <div class="row">
                        <div class="col">
                            <h3>0</h3>
                            <span>Disponible</span>
                        </div>
                        <div class="col">
                            <h3>0</h3>
                            <span>Asignado</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-2 text-right">
                    <a href="" class="text-white-50">Ver Inventario</a>
                </div>
            </div>
        </div> --}}
        <div class="col">
            <div class="card h-100 text-white" style="background: rgb(135, 5, 5) !important">
                <div class="card-header">
                    <strong>Orden Público</strong>
                </div>
                <div class="card-body my-0 py-0 mt-4">
                    <div class="row">
                        <div class="col">
                            <h3>0</h3>
                            <span>Disponible</span>
                            <h6 ><a href="/tramites/material_de_guerra" class="text-white-50">Asignar Orden Público</a></h6>

                        </div>
                        <div class="col">
                            <h3>0</h3>
                            <span>Asignado</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-2 text-right">
                    <a href="" class="text-white-50">Ver Inventario</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <div class="card h-100 text-white" style="background: rgb(15, 21, 46) !important">
                <div class="card-header">
                    <strong>Explosivos</strong>
                </div>
                <div class="card-body my-0 py-0 mt-4">
                    <div class="row">
                        <div class="col">
                            <h3>0</h3>
                            <span>Disponible</span>
                            <h6 ><a href="/tramites/material_de_guerra" class="text-white-50">Asignar Explosivos</a></h6>

                        </div>
                        <div class="col">
                            <h3>0</h3>
                            <span>Asignado</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-2 text-right">
                    <a href="" class="text-white-50">Ver Inventario</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-white" style="background: rgb(4, 92, 107) !important">
                <div class="card-header">
                    <strong>Equipos Ópticos y Optrónicos</strong>
                </div>
                <div class="card-body my-0 py-0 mt-4">
                    <div class="row">
                        <div class="col">
                            <h3>0</h3>
                            <span>Disponible</span>
                            <h6 ><a href="/tramites/material_de_guerra" class="text-white-50">Asignar Equipos Ópticos y Optrópicos</a></h6>

                        </div>
                        <div class="col">
                            <h3>0</h3>
                            <span>Asignado</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-2 text-right">
                    <a href="" class="text-white-50">Ver Inventario</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 text-white" style="background: rgb(58, 2, 53) !important">
                <div class="card-header">
                    <strong>Artillerías Aereas</strong>
                </div>
                <div class="card-body my-0 py-0 mt-4">
                    <div class="row">
                        <div class="col">
                            <h3>0</h3>
                            <span>Disponible</span>
                            <h6 ><a href="/tramites/material_de_guerra" class="text-white-50">Asignar Artillería Aerea</a></h6>

                        </div>
                        <div class="col">
                            <h3>0</h3>
                            <span>Asignado</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-2 text-right">
                    <a href="" class="text-white-50">Ver Inventario</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col card mr-2">
            <div class="row-col p-2">
                <h3 style="color: #6A0304" class="d-inline ">Consultar Cédula</h3>
                <form action="#" method="POST" class="d-inline float-right">
                    <div class="d-flex">
                        <input type="text" name="search" class="form-control " />
                        <button type="submit" style="background:#fff" class="btn">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col card ml-2">
            <div class="row-col p-2">
                <h3 style="color: #6A0304" class="d-inline ">Consultar Serial</h3>
                <form action="#" method="POST" class="d-inline float-right">
                    <div class="d-flex">
                        <input type="text" name="search" class="form-control " />
                        <button type="submit" style="background:#fff" class="btn">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('scripts')

@endsection
