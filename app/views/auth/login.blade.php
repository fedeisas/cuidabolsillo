@extends('layouts.master')

@section('content')

  <div class="container">
    <div class="row" style="margin-bottom: 20px;">
      <div class="col-xs-12 col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Login</h3>
            </div>
            <div class="panel-body">

                @if(Session::has('message'))
                  <div class="alert alert-danger">
                    <strong>Ooopps!</strong> {{{ Session::get('message') }}}
                  </div>
                @endif

                {{ Form::open(array('route' => 'auth.login.post', 'role' => 'form')) }}

                  <div class="form-group">
                    <label for="email">Email</label>
                    {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'john@doe.com', 'id' => 'email')) }}
                  </div>

                  <div class="form-group">
                    <label for="password">Password</label>
                    {{ Form::input('password', 'password', null, array('class' => 'form-control', 'id' => 'password')) }}
                  </div>

                  <button type="submit" class="btn btn-success pull-right">Submit</button>

                {{ Form::close() }}

            </div>
        </div>
      </div>
    </div>

    @include('partials.footer')

  </div>

@stop