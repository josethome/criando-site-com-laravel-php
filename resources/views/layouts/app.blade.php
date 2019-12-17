<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="css/app.css"> --}}
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
      
      @yield('navegacao')

      @yield('conteudo')

      @yield('rodape')

    </div>       

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">      
    </script>
    <script src="js/app.js"></script>    
  </body>
</html>