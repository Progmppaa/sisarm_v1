@extends("theme.$theme.layout")
@section('titulo')
Armamentos Editar
@stop
@section('styles')

@stop
@section('contenido')
<div class="container pt-5 w-50 align-items-left">

    <div class="row card  shadow p-3 mb-5 rounded" style="background: rgb(235, 235, 235)">
        <div class="col-12">
            <form class="form-horizontal pt-5" method="GET" style="margin-left:10%" action="{{ route('armamento') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="titulo" class="col-3">Código</label>
                    <input type="text" name="codigo" class="form-control col" value="{{$armas->codigo}}">
                </div>
                <div class="form-group row">
                    <label for="titulo" class="col-3">Nombre</label>
                    <input type="text" name="nombre" class="form-control col" value="{{$armas->nombre}}">
                </div>
                <div class="form-group row">
                    <label for="titulo" class="col-3">Marca</label>
                    <input type="text" name="marca" class="form-control col" value="{{$armas->marca}}">
                </div>
                <div class="form-group row">
                    <label for="titulo" class="d-inline col-3">Modelo</label>
                    <input type="text" name="modelo" class="form-control col" value="{{$armas->modelo}}">
                </div>
                <div class="form-group row">
                    <label for="titulo" class="d-inline col-3">Calibre</label>
                    <input type="text" name="calibre" class="form-control col" value="{{$armas->calibre}}">
                </div>
                <div class="container-fluid ">
                    <div class="row w-100 align-items-center">
                        <div class="col text-center pb-5">
                            <button class="btn bg-gradient-info" type="submit" a href="{{ route('armamento-update') }}">Actualizar</button>
                            <input class="btn bg-info ml-2" type="reset" value="Limpiar">
                            <a href="{{ route('armamento-update') }}" class="btn bg-gradient-danger ml-2" type="submit">Cancelar</a>
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
@endsection