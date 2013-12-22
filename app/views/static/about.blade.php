@extends('layouts.master')

@section('content')
  <div class="container">

    <div class="row" style="margin-bottom: 20px;">
      <div class="col-xs-12 col-md-8 col-md-offset-2">

        <div class="page-header">
          <h1 class="text-center">Cómo funciona?</h1>
        </div>

        <p>Esta aplicación fue desarrollada el 15 de Diciembre de 2013 en el marco del primer <a href="http://tucapps.com.ar/" target="_blank">Hackathon Ciudadano</a> en la ciudad de <a href="http://es.wikipedia.org/wiki/San_Miguel_de_Tucum%C3%A1n" target="_blank">San Miguel de Tucumán</a>.</p>

        <hr>

        <h4>Tecnología y open source</h4>
        <p>El proyecto está desarrollado con PHP 5.4, utilizando el framework <a target="_blank" href="http://laravel.com">Laravel</a> y guardamos los precios en una base de datos MySQL. Para la interfaz de usuario utilizamos <a target="_blank" href="http://getbootstrap.com">Twitter Bootstrap</a>.</p>
        <p>Utilizamos, también, la <a target="_blank" href="https://developer.foursquare.com/">API de Foursquare</a> para tratar de identificar los negocios desde los cuales se cargan precios.</p>
        <p>El código fuente está disponible en <a target="_blank" href="http://github.com/fedeisas/cuidabolsillo">Github</a> si te interesa colaborar.</p>

        <hr>

        <h4>Equipo:</h4>
        <ul class="list-inline">
          <li>
            <a target="_blank" href="http://fedeisas.com.ar">Fede Isas</a>
          </li>
          <li>
            <a target="_blank" href="https://www.facebook.com/gabrielmazarock">Gabriel Maza</a>
          </li>
          <li>
            <a target="_blank" href="https://www.facebook.com/guillermo.mazzucco.7">Guillermo Mazzucco</a>
          </li>
        </ul>
      </div>
    </div>
    @include('partials.footer')
  </div>
@stop