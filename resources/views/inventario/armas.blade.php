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
        <div class="card elevation-4 text-white">
            <div class="card-header" style="background:{{$estado->color}} ">
                {{-- bg-gradient --}}
                <b>{{$estado->nombre}}</b>
            </div>
            <div class="card-body" style="background:{{$estado->color}}">
                <h3>0</h3>
                <strong>Armas en el estado</strong>
            </div>
            <div class="card-footer" style="background:{{$estado->color}}">
                <a class="text-white" href="{{ route('Detalles-armas-show',$estado->id) }}">Ver detalles</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@stop
@section('scripts')
@endsection