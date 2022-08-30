@extends('layouts/plantilla')

@section('contenido')



<div class="row mt-5">
    <div class="card">
        <h4 class="text-center mt-4">Personas registradas: {{$personas}}</h4>
    <div class="col">
        
        <div id="container">          
        </div>
    </div>
</div>
</div>

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
        text: '' 
    },
    tooltip: {
        pointFormat: '<b>{point.y}</b>'
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
                format: '<b>{point.name}</b>: {point.percentage:.1f} % <b>{point.y}</b>'
            }
        }
    },
    series: [{
        name: 'Cantidad',
        colorByPoint: true,
        data:  [{
            name: 'Hombres: ',
            y: <?= $hombres ?>,
            total: <?= $personas ?>,
            sliced: true,
            selected: true
        },
        {
            name: 'Mujeres: ',
            y: <?= $mujeres ?>,
            total: <?= $personas ?>,
            sliced: true,
            selected: true
        }
       
        
    ],
  
    
    
    }]
});
</script>
@endsection