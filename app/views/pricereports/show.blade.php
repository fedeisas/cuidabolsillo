@extends('layouts.master')

@section('content')

  <div class="container">

    <div class="row" style="margin-bottom: 20px;">
      <div class="col-xs-12 col-md-8 col-md-offset-2">

        <div class="page-header">
          <h1 class="text-center">{{{ $priceReport->product->name }}}</h1>
        </div>

        @if($percentVariation < 0)
          <h1 class="text-center text-success variation">
            <i class="glyphicon glyphicon-arrow-down"></i> {{{ number_format($percentVariation, 2) }}}%
          </h1>

          <p class="text-center text-muted">
           $ {{{ number_format($averagePrice, 2) }}} promedio en los últimos 7 días
          </p>
        @elseif($percentVariation > 0)
          <h1 class="text-center text-danger variation">
            <i class="glyphicon glyphicon-arrow-up"></i> {{{ number_format($percentVariation, 2) }}}%
          </h1>

          <p class="text-center text-muted">
           $ {{{ number_format($averagePrice, 2) }}} promedio en los últimos 7 días
          </p>
        @else
          <h1 class="text-center">
            {{{ number_format($percentVariation, 2) }}}%
          </h1>

          <p class="text-center text-muted">
           $ {{{ number_format($averagePrice, 2) }}} promedio en los últimos 7 días
          </p>
        @endif

        <hr>

        <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>Aprovecha!</strong> En Carrefour (a 300m) podés conseguir este producto por $14.24 y ahorrarte un 22.4%.
        </div>

        <hr>

        @include('widgets.ibp', array('ibp' => $ibp))

        <hr>

        @include('widgets.priceHistory', array('priceHistory' => $priceHistory))

        <hr>

        <div id="chart" style="width: 100%; height: 500px;"></div>

      </div>
    </div>
    @include('partials.footer')
  </div>
@stop

@section('extrajs')
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Fecha', 'Precio'],
      ['2013-12-01',  14.20],
      ['2013-12-02',  15.48],
      ['2013-12-03',  12.45],
      ['2013-12-04',  24.30]
    ]);

    var options = {
      title: 'Evolución del Precio'
    };

    var chart = new google.visualization.LineChart(document.getElementById('chart'));
    chart.draw(data, options);
  }
</script>
@stop