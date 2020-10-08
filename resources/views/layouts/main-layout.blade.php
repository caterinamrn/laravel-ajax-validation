<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script type="text/javascript" src="{{ asset('js/app.js') }}">

    </script>
  </head>
  <body>
    <div class="container">
      @include('partials.header')
      @yield('content')
      @include('partials.footer')
    </div>
  </body>
</html>
