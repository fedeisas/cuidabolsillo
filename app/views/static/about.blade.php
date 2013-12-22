@extends('layouts.master')

@section('content')
  <div class="container">

    <div class="row" style="margin-bottom: 20px;">
      <div class="col-xs-12 col-md-8 col-md-offset-2">

        <div class="page-header">
          <h1 class="text-center">CuidaBolsillo.com</h1>
        </div>

        <h4>Cómo nació?</h4>
        <p>Esta aplicación fue desarrollada el 15 de Diciembre de 2013 en el marco del primer <a href="http://tucapps.com.ar/" target="_blank">Hackathon Ciudadano</a> organizado por el <a target="_blank" href="http://burocoworking.com.ar">Buró Coworking</a> en la ciudad de <a href="http://es.wikipedia.org/wiki/San_Miguel_de_Tucum%C3%A1n" target="_blank">San Miguel de Tucumán</a>. La aplicación aún se encuentra en etapa de pruebas (BETA).</p>

        <hr>

        <h4>Cómo funciona?</h4>

        <p>Cada vez que estés por comprar algo, pero no estás seguro si el precio es justo, esta es la aplicación que necesitás.</p>
        <p>Cada usuario que consulta un precio está, a su vez, informando un precio en un lugar determinado. Esos valiosos datos sumados a los generosamente provistos por el <a target="_blank" href="http://www.cippes.org/">CIPPES</a>, nos permiten informarte: </p>
        <ul class="list-unstyled">
          <li>
            <i class="glyphicon glyphicon-ok"></i> Cuánto se desvía el precio que estás por pagar del promedio de tu provincia
          </li>
          <li>
            <i class="glyphicon glyphicon-ok"></i> La evolución del precio y del índice IBP en tu provincia para ese producto
          </li>
          <li>
            <i class="glyphicon glyphicon-ok"></i> Sugerencias de lugares cercanos donde comprar ese producto a menor precio
          </li>
        </ul>

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