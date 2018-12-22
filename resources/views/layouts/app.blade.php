<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="portfolio piotra rogalskiego, piotr rogalski, programista, webdev, portfolio"/> 
  <meta name="description" content="Piotr Rogalski - web develper - portfolio ">
  <meta name="author" content="Piotr Rogalski">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'laravel') }}</title>
  <link
    href="https://fonts.googleapis.com/css?family=Kumar+One+Outline|Open+Sans+Condensed:300&amp;subset=latin-ext"
    rel="stylesheet">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/user.css') }}" rel="stylesheet">
</head>
<body>
    @yield('content')
    <div id="app">
      <!-- vue -->
    </div>
  </div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>