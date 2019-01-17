<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="frontend developer, backend developer, portfolio piotra rogalskiego, piotr rogalski, programista, webdev, portfolio"/> 
  <meta name="description" content="Piotr Rogalski - web developer - portfolio">
  <meta name="author" content="Piotr Rogalski">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $title }}</title>
  <link
    href="https://fonts.googleapis.com/css?family=Kumar+One+Outline|Open+Sans+Condensed:300&amp;subset=latin-ext"
    rel="stylesheet">
  <!-- styles -->
  <link rel="shortcut icon" href="{{url('/images/logo.png')}}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/user.css') }}" rel="stylesheet">
  <link href="{{ asset('css/fontello/css/fontello.css') }}" rel="stylesheet">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>

  <div class="window-container-width mx-auto">
    @yield('content')
  </div>

  <div id="app"><!-- vue --></div>

  @include('inc.footer')

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/user.js') }}"></script>

</body>
</html>