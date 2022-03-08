@extends("theme.$theme.layout")
@section('titulo')
    Detalles Armas 
@stop
@section('styles')

@stop
@section('contenido')
<div class="row p-3 mx-auto">
    @foreach ($estados as $estado)
    <div class="col-lg-6">
        <div class="card elevation-8 bg-ligth ">
            <div class="card-header ">
                {{-- <b>{{$estado->nombre}}</b> --}}
                <h4>En el estado {{$estado->nombre}}: </h5>
            </div>
            <div class="card-body">

                <p>Dependencia: 1 </p>
                <p>Destacamentos: 3 </p>
                <p>Compañías: 10 </p>
                <a href="{{ route('grafico-armas') }}">Ver en gráfica</a>
            </div>
            <div class="card-footer">
                {{-- <a href="">Ver detalles</a> --}}
            </div>
        </div>
    </div>
    @endforeach
</div>
@stop
@section('scripts')
@endsection