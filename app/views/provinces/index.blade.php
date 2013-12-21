@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="row" style="margin-bottom: 20px;">
      <div class="col-xs-12 col-md-6 col-md-offset-3">
        <h1 class="text-center">Seleccionar Provincia</h1>

        @if(Session::has('message'))
          <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Ooopps!</strong> {{{ Session::get('message') }}}
          </div>
        @endif

        <div class="list-group">
          @foreach($provinces as $province)
            <a href="{{{ $province->set_link }}}" class="list-group-item" title="{{{ $province->name }}}">
              {{{ $province->name }}}
            </a>
          @endforeach
        </div>
      </div>
    </div>
    @include('partials.footer')
  </div>
@stop