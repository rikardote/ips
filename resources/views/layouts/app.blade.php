<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inventario de IP'S</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/journal/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    
    <!-- Styles -->
    
    <link rel="stylesheet" href="{{ asset('css/stylelayout.css') }}">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

</head>
<body>
    @yield('nav')
    <div id="wrap">
        @yield('content')
    </div>   
    
    <div id="footer">
    <footer class="footer">
      <div class="container">
        <p class="text-muted"> &copy;  {{date('Y')}} ISSSTE BAJA CALIFORNIA Por: Ricardo Fuentes</p>
      </div>
    </footer>
    </div>

    <!-- JavaScripts -->
    <script src="{{ asset('plugins/jquery/js/jquery.js') }}"></script>
    

    @yield('js');
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
     <script>
        $('#alert').delay(2000).fadeOut(800)
    </script>
</body>

</html>