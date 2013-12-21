@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="row" style="margin-bottom: 20px;">
      <div class="col-xs-12 col-md-6 col-md-offset-3">
        <div class="page-header">
          <h1 class="text-center">Productos</h1>
        </div>
        <div class="list-group">
          @foreach($products as $product)
            <a href="{{{ $product->link }}}" class="list-group-item" title="{{{ $product->name }}}">
              {{{ $product->name }}}
            </a>
          @endforeach
        </div>
      </div>
    </div>
    @include('partials.footer')
  </div>
@stop