@extends('layouts.master')

@section('content')

  <div class="container">

    <div class="row" style="margin-bottom: 20px;">
      <div class="col-xs-12 col-md-8 col-md-offset-2">

        <div class="page-header">
          <h1 class="text-center">{{{ $priceReport->product->name }}}</h1>
        </div>

        @if($deviation <= 0)
          <h1 class="text-center text-success variation">
            <span class="label label-success">{{{ number_format(abs($deviation), 2) }}}%</span>
          </h1>

          <h1 class="text-center text-success">
            de ahorro
          </h1>

          <p class="text-center text-muted">
           $ {{{ number_format($suggestedPrice, 2) }}} sugerido | $ {{{ number_format($priceReport->price, 2) }}} tu precio
          </p>
        @elseif($deviation > 0)
          <h1 class="text-center text-danger variation">
            <span class="label label-danger">{{{ number_format(abs($deviation), 2) }}}%</span>
          </h1>

          <h1 class="text-center text-danger">
            de sobreprecio
          </h1>

          <p class="text-center text-muted">
           $ {{{ number_format($suggestedPrice, 2) }}} sugerido | $ {{{ number_format($priceReport->price, 2) }}} tu precio
          </p>
        @endif

        <hr>

        <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>Aprovecha!</strong> En Carrefour (a 300m) podés conseguir este producto por $14.24 y ahorrarte un 22.4%.
        </div>

        <hr>

        @include('widgets.ibp', array('ibp' => $ibp))
        @include('widgets.priceHistory', array('priceHistory' => $priceHistory))

        <div id="chart" style="width: 100%; height: 400px;"></div>

      </div>
    </div>
    @include('partials.footer')
  </div>
@stop

@section('extrajs')

@if ($possibleBusinesses)
  <!-- Modal -->
  <div class="modal fade" id="possibleBusinessesModal" tabindex="-1" role="dialog" aria-labelledby="possibleBusinessesModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Ayudanos a ubicarte</h4>
        </div>
        <div class="modal-body">
          <p><strong>Estás en alguno de estos lugares?</strong></p>
          <div class="list-group">
            @foreach ($possibleBusinesses as $business)
              <a href="{{{ route('pricereport.setBusiness', array($priceReport->hash, $business->id)) }}}" class="list-group-item setBusiness">
                {{{ $business->large_name }}}
              </a>
            @endforeach
          </div>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div> -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <script type="text/javascript">
    $(document).ready(function () {
      $('#possibleBusinessesModal').modal('show');

      $('.setBusiness').on('click', function (e) {
        e.preventDefault();
        $.ajax({
          type: 'POST',
          url: $(this).attr('href'),
          data: {
            '_token': '{{{ csrf_token() }}}'
          },
          success: function() {
            $('#possibleBusinessesModal').modal('hide');
          },
          error: function(){
            $('#possibleBusinessesModal').modal('hide');
          },
          cache:false
        });
      });
    });
  </script>
@endif


<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = new google.visualization.DataTable({{ json_encode($chartData) }});


    var options = {
      title: 'Evolución del Precio'
    };

    var chart = new google.visualization.LineChart(document.getElementById('chart'));
    chart.draw(data, options);
  }
</script>
@stop