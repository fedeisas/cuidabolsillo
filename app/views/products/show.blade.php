@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="row" style="margin-bottom: 20px;">
      <div class="col-xs-12 col-md-6 col-md-offset-3">
        <div class="page-header">
            <h1 class="text-center">{{{ $product->name }}}</h1>
        </div>

        @if ($suggestedPrice)
          <div class="text-center">
            <h1 class="text-success variation">
              $ {{{ number_format($suggestedPrice, 2) }}}
            </h1>
            <small>Precio sugerido para {{{ $province->name }}}</small>
          </div>
          <hr>
        @else
          <div class="alert alert-secondary">
            No hay suficientes datos para sugerir un precio.
          </div>
          <hr>
        @endif

        @include('widgets.ibp', array('ibp' => $ibp))
        @include('widgets.priceHistory', array('priceHistory' => $priceHistory))

      </div>
    </div>
    @include('partials.footer')
  </div>
@stop