@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="row" style="margin-bottom: 20px;">
      <div class="col-xs-12 col-md-6 col-md-offset-3">

        {{ Form::open(array('route' => 'pricereport.store', 'role' => 'form')) }}

          @if (Session::has('message'))
            <div class="alert alert-danger">
              <strong>Ooopps!</strong> {{{ Session::get('message') }}}
            </div>
          @endif

          @if ($province)
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Ud. está en <strong>{{{ $province->name }}}</strong>. <a href="{{{ route('provinces.index') }}}">Cambiar</a>
            </div>
          @endif

          <div class="form-group">
            <label for="product_id">Selecciona un producto:</label>
            {{ Form::select('product_id', $select, null, array('class' => 'form-control', 'id' => 'product_id')) }}
          </div>

          <div class="form-group">
            <label for="price">Qué precio encontraste? (decimales con punto)</label>
            <div class="input-group">
              <span class="input-group-addon">$</span>
              {{ Form::input('number', 'price', null, array('class' => 'form-control', 'placeholder' => 11.25, 'id' => 'price', 'step' => 0.01, 'pattern' => '[0-9]+([\.|,][0-9]+)?')) }}
            </div>
          </div>

          {{ Form::hidden('latitude', null, array('id' => 'latitude', 'id' => 'latitude')) }}
          {{ Form::hidden('longitude', null, array('id' => 'longitude', 'id' => 'longitude')) }}

          <button type="submit" class="btn btn-success btn-lg center-block">
            <i class="glyphicon glyphicon-search"></i>
            Comparar
          </button>

        {{ Form::close() }}

      </div>
    </div>
    @include('partials.footer')
  </div>
@stop

@section('extrajs')
  <script src="{{{ asset('js/form.js') }}}" type="text/javascript"></script>
@stop