<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Martijn Goes Coding</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/foundation.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/app.css') }}">
</head>
  <body>

@yield('content')

  <script src="{{ URL::asset('assets/js/vendor/jquery.js') }}"></script>
  <script src="{{ URL::asset('assets/js/vendor/what-input.js') }}"></script>
  <script src="{{ URL::asset('assets/js/vendor/foundation.js') }}"></script>
  <script src="{{ URL::asset('assets/js/app.js') }}"></script>
  </body>
</html>