<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials.meta')
    @include('partials.css')
  </head>
  <body>
    @include('partials.header')
    @yield('content')
    @include('partials.js')
    @yield('extrajs')
  </body>
</html>