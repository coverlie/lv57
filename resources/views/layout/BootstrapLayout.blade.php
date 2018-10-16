<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
   <title>@yield('title')</title>

    @yield('head')
  </head>

  <body>
    <header>
      @yield('navbar')
    </header>
  <br>
    <div class='container'>

      @yield('content')
    </div>

@yield('js')
 </body>
</html>
