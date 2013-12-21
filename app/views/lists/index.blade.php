@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="row" style="margin-bottom: 20px;">
      <div class="col-xs-12 col-md-8 col-md-offset-2">
        <div class="page-header">
          <h1 class="text-center">Listas</h1>
        </div>
        <div class="list-group">
          @foreach($lists as $list)
            <a href="{{ route('lists.show', $list->id) }}" class="list-group-item">
              {{{ $list->name }}}
            </a>
          @endforeach
        </div>
      </div>
    </div>
    @include('partials.footer')
  </div>
@stop