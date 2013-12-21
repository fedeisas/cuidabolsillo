@extends('layouts.master')

@section('content')

  <style>
  .variation {
    font-size: 50px;
    font-weight: bolder;
  }
  </style>

  <div class="container">

    <div class="row" style="margin-bottom: 20px;">
      <div class="col-xs-12 col-md-8 col-md-offset-2">

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

        <p class="text-center">Datos del IBP ({{ date('m') }}, {{ date('Y') }})</p>
        <div class="table-responsive">
          <table class="table table-striped text-center">
            <thead>
              <tr>
                <th class="text-center">Mediana</th>
                <th class="text-center">Mínimo</th>
                <th class="text-center">Máximo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>${{ number_format($ibp->first()->median, 2) }}</td>
                <td>${{ number_format($ibp->first()->min, 2) }}</td>
                <td>${{ number_format($ibp->first()->max, 2) }}</td>
              </tr>
            </tbody>
          </table>
        </div>

        <hr>

        <div class="price-history">
            <div class="list-group">
              @foreach($priceHistory as $history)

                <div class="list-group-item">
                  <h4 class="list-group-item-heading">$ {{{ number_format($history->price, 2) }}}</h4>

                  @if($history->business_id)
                    <p class="list-group-item-text">
                      <strong>{{{ $history->created_at->diffForHumans() }}}</strong> en <a href="#"><i class="glyphicon glyphicon-map-marker"></i> {{{ $history->business->name }}}, {{{ $history->business->location_address }}}</a>
                    </p>
                  @else
                    <p class="list-group-item-text">
                      <strong>{{{ $history->created_at->diffForHumans() }}}</strong> en {{{ $history->latitude }}}, {{{ $history->latitude }}}
                    </p>
                  @endif
                </div>
            @endforeach
            </div>
        </div>

        <hr>

        <div id="chart" style="width: 100%; height: 500px;"></div>

      </div>
    </div>


    <!-- /END THE FEATURETTES -->
    @include('partials.footer')

  </div><!-- /.container -->
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