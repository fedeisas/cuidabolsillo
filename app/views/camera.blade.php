@extends('layouts.master')

@section('content')

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container">

    <div class="row" style="margin-bottom: 20px;">
      <div class="col-xs-12 col-md-8 col-md-offset-2">

        {{ Form::open(array('route' => 'pricereport.store', 'role' => 'form')) }}

        <div class="cols-xs-6 col-md-6">
          <input id="upload-picture" type="file" accept="image/jpeg;capture=camera" class="filestyle" data-classButton="btn btn-warning" data-classInput="input-small">
        </div>
        <div class="cols-xs-6 col-md-6">
          <img width="320" height="240" src="" id="picture" style="" />
        </div>

          <p id="textbit" style="position:absolute;left:5px;top:250px;"></p>


          <div class="form-group">
            <label for="barcode">Código de barras</label>
            {{ Form::text('barcode', null, array('class' => 'form-control', 'placeholder' => 'Código de barras', 'id' => 'barcode')) }}
          </div>

          <div class="form-group">
            <label for="price">Qué precio encontraste?</label>
            <div class="input-group">
              <span class="input-group-addon">$</span>
              {{ Form::input('number', 'price', null, array('class' => 'form-control', 'placeholder' => 11.25, 'id' => 'price', 'step' => 0.01, 'pattern' => '[0-9]+([\.|,][0-9]+)?')) }}
            </div>
          </div>

          {{ Form::hidden('latitude', null, array('id' => 'latitude', 'id' => 'latitude')) }}
          {{ Form::hidden('longitude', null, array('id' => 'longitude', 'id' => 'longitude')) }}

          {{ Form::button('Comparar', array('type' => 'submit', 'class' => 'btn btn-success center-block')) }}

        {{ Form::close() }}
      </div>
    </div>


    <!-- /END THE FEATURETTES -->
    @include('partials.footer')

  </div><!-- /.container -->

@stop

@section('extrajs')
  <script src="/js/form.js" type="text/javascript"></script>
  <script src="/js/interface.js" type="text/javascript"></script>
  <script src="/js/bootstrap-filestyle.js"></script>
  <!-- <script src="/js/bootstrap.file-input.js" type="text/javascript"></script> -->
  <script src="/js/camera.js" type="text/javascript"></script>
@stop