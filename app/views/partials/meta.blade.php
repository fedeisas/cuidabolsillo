<base href="{{{ route('home') }}}">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="CuidaBolsillo.com te permite comparar precios en tu barrio para ahorrar dinero.">
<meta name="keywords" content="inflación, argentina, dinero, ahorrar, carrefour">
<meta name="author" content="Fede Isas, Guillermo Mazzucco, Gabriel Maza">

<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="CuidaBolsillo">
<meta name="apple-touch-fullscreen" content="yes" />
<meta name="mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">
<meta name="HandheldFriendly" content="true" />
<meta http-equiv="x-rim-auto-match" content="none" />

<meta property="og:title" content="{{{ $title }}}"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="{{{ route('home') }}}"/>
<meta property="og:image" content="{{{ asset('img/ios/AppIcon76x76@2x.png') }}}"/>
<meta property="og:site_name" content="{{{ Config::get('custom.name') }}}"/>
<meta property="og:description" content="CuidaBolsillo.com te permite comparar precios en tu barrio para ahorrar dinero."/>

<title>{{{ $title }}}</title>
<!-- env: {{ App::environment() }} -->

<link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">

<!-- Mobile Icons -->

<!-- Android -->
<link rel="shortcut icon" sizes="36x36" href="{{{ asset('img/android/36.png') }}}">
<link rel="shortcut icon" sizes="48x48" href="{{{ asset('img/android/48.png') }}}">
<link rel="shortcut icon" sizes="72x72" href="{{{ asset('img/android/72.png') }}}">
<link rel="shortcut icon" sizes="96x96" href="{{{ asset('img/android/96.png') }}}">

<!-- iOS 7 iPad (retina) -->
<link href="{{{ asset('img/ios/AppIcon76x76@2x.png') }}}"
      sizes="152x152"
      rel="apple-touch-icon">

<!-- iOS 6 iPad (retina) -->
<link href="{{{ asset('img/ios/AppIcon72x72@2x.png') }}}"
      sizes="144x144"
      rel="apple-touch-icon">

<!-- iOS 7 iPhone (retina) -->
<link href="{{{ asset('img/ios/AppIcon60x60@2x.png') }}}"
      sizes="120x120"
      rel="apple-touch-icon">

<!-- iOS 6 iPhone (retina) -->
<link href="{{{ asset('img/ios/AppIcon57x57@2x.png') }}}"
      sizes="114x114"
      rel="apple-touch-icon">

<!-- iOS 7 iPad -->
<link href="{{{ asset('img/ios/AppIcon76x76.png') }}}"
sizes="76x76"
rel="apple-touch-icon">

<!-- iOS 6 iPad -->
<link href="{{{ asset('img/ios/AppIcon72x72.png') }}}"
      sizes="72x72"
      rel="apple-touch-icon">

<!-- iOS 6 iPhone -->
<link href="{{{ asset('img/ios/AppIcon57x57.png') }}}"
      sizes="57x57"
      rel="apple-touch-icon">

<!-- Startup images -->

<!-- iOS 6 & 7 iPad (retina, portrait) -->
<link href="{{{ asset('img/splash/Default-Portrait@2x.png') }}}"
      media="(device-width: 768px) and (device-height: 1024px)
      and (orientation: portrait)
      and (-webkit-device-pixel-ratio: 2)"
      rel="apple-touch-startup-image">

<!-- iOS 6 & 7 iPad (retina, landscape) -->
<link href="{{{ asset('img/splash/Default-Landscape@2x.png') }}}"
      media="(device-width: 768px) and (device-height: 1024px)
      and (orientation: landscape)
      and (-webkit-device-pixel-ratio: 2)"
      rel="apple-touch-startup-image">

<!-- iOS 6 iPad (portrait) -->
<link href="{{{ asset('img/splash/Default-Portrait.png') }}}"
      media="(device-width: 768px) and (device-height: 1024px)
      and (orientation: portrait)
      and (-webkit-device-pixel-ratio: 1)"
      rel="apple-touch-startup-image">

<!-- iOS 6 iPad (landscape) -->
<link href="{{{ asset('img/splash/Default-Landscape.png') }}}"
      media="(device-width: 768px) and (device-height: 1024px)
      and (orientation: landscape)
      and (-webkit-device-pixel-ratio: 1)"
      rel="apple-touch-startup-image">

<!-- iOS 6 & 7 iPhone 5 -->
<link href="{{{ asset('img/splash/Default-568h@2x.png') }}}"
      media="(device-width: 320px) and (device-height: 568px)
      and (-webkit-device-pixel-ratio: 2)"
      rel="apple-touch-startup-image">

<!-- iOS 6 & 7 iPhone (retina) -->
<link href="{{{ asset('img/splash/Default@2x.png') }}}"
      media="(device-width: 320px) and (device-height: 480px)
      and (-webkit-device-pixel-ratio: 2)"
      rel="apple-touch-startup-image">

<!-- iOS 6 iPhone -->
<link href="{{{ asset('img/splash/Default.png') }}}"
      media="(device-width: 320px) and (device-height: 480px)
      and (-webkit-device-pixel-ratio: 1)"
      rel="apple-touch-startup-image">