@extends("theme.$theme.layout")
@section('titulo')
    Armamento
@stop
@section('styles')

@stop
@section('contenido')
<div class="row p-3 mx-auto">
    @foreach ($estados as $estado)
    <div class="col-lg-3">
        <div class="card elevation-2 bg-gradient-dark ">
            <div class="card-header ">
                <b>{{$estado->nombre}}</b>
            </div>
            <div class="card-body">
                <h3>0</h3>
                <strong>Armas en el estado</strong>
            </div>
            <div class="card-footer">
                <a href="{{ route('Detalles-armas') }}">Ver detalles</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@stop
@section('scripts')
@endsection