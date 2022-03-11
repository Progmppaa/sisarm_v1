@extends("theme.$theme.layout")
@section('titulo')
    Detalles Armas 
@stop
@section('styles')
<style>
    .highcharts-figure,
  .highcharts-data-table table {
      min-width: 320px;
      max-width: 800px;
      margin: 1em auto;
  }
  
  .highcharts-data-table table {
      font-family: Verdana, sans-serif;
      border-collapse: collapse;
      border: 1px solid #ebebeb;
      margin: 10px auto;
      text-align: center;
      width: 100%;
      max-width: 500px;
  }
  
  .highcharts-data-table caption {
      padding: 1em 0;
      font-size: 1.2em;
      color: #555;
  }
  
  .highcharts-data-table th {
      font-weight: 600;
      padding: 0.5em;
  }
  
  .highcharts-data-table td,
  .highcharts-data-table th,
  .highcharts-data-table caption {
      padding: 0.5em;
  }
  
  .highcharts-data-table thead tr,
  .highcharts-data-table tr:nth-child(even) {
      background: #f8f8f8;
  }
  
  .highcharts-data-table tr:hover {
      background: #f1f7ff;
  }
  
  input[type="number"] {
      min-width: 50px;
  }
  
  </style>
@stop
@section('contenido')
<div class="row p-3 mx-auto">
    {{-- @foreach ($estados as $estado) --}}
    <div class="col-lg-6">
        <div class="card elevation-8 text-white " style="background:{{$estado->color}}">
            <div class="card-header bg-gradient-dark" >
                <h4>En el Estado  {{$estado->nombre}}: </h4>
            </div>
            <div class="card-body" >
                <p>Dependencia: 1 </p>
                <p>Destacamentos: 3 </p>
                <p>Compañías: 10 </p>
            </div>
            <div class="card-footer">
            </div>
        </div>   
    </div>
    <div class="col-6">
        <figure class="highcharts-figure">
            <div id="container">
            </div>
        </figure> 
    </div>
    {{-- @endforeach --}}
</div>
@stop
@section('scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script>
  Highcharts.chart('container', {
  chart: {
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false,
      type: 'pie'
  },
  title: {
      text: " Gráfica"
  },
  tooltip: {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  accessibility: {
      point: {
          valueSuffix: '%'
      }
  },
  plotOptions: {
      pie: {
          allowPointSelect: true,
          cursor: 'pointer',
          dataLabels: {
              enabled: true,
              format: '<b>{point.name}</b>: {point.percentage:.1f} %'
          }
      }
  },
  series: [{
      name: 'Brands',
      colorByPoint: true,
      data: [{
          name: 'Chrome',
          y: 61.41,
          sliced: true,
          selected: true
      }, {
          name: 'Internet Explorer',
          y: 11.84
      }, {
          name: 'Firefox',
          y: 10.85
      }, {
          name: 'Edge',
          y: 4.67
      }, {
          name: 'Safari',
          y: 4.18
      }, {
          name: 'Sogou Explorer',
          y: 1.64
      }, {
          name: 'Opera',
          y: 1.6
      }, {
          name: 'QQ',
          y: 1.2
      }, {
          name: 'Other',
          y: 2.61
      }]
  }]
});
</script>
@endsection