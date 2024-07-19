<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="{{ url('assets/js/splide.min.js') }}"></script>
  <link rel="stylesheet" href="{{ url('assets/css/splide.min.css') }}" />
  <script src="{{ url('assets/js/jquery.js') }}"></script>
  <script src="{{ url('assets/js/our_services.js') }}"></script>
</head>
<body>
@yield('content')
</body>
</html>