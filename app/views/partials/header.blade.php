<div class="navbar-wrapper">
  <div class="container">
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{{ route('home') }}}">
            {{{ Config::get('custom.name') }}}
          </a>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="{{{ (Route::current() == 'home') ? 'active' : '' }}}">
              <a href="{{{ route('home') }}}">
                <i class="glyphicon glyphicon-home"></i>
                Inicio
              </a>
            </li>
            <li class="{{{ (Route::current() == 'products.index') ? 'active' : '' }}}">
              <a href="{{{ route('products.index') }}}">
                <i class="glyphicon glyphicon-align-justify"></i>
                Productos
              </a>
            </li>
            <li class="{{{ (Route::current() == 'about') ? 'active' : '' }}}">
              <a href="{{{ route('about') }}}">
                <i class="glyphicon glyphicon-question-sign"></i>
                Cómo funciona?
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>