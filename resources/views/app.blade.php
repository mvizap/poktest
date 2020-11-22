<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba POK</title>
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded " >
            <a class="navbar-brand" href="#">Prueba POK</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/usuario"><i class="fas fa-user"></i> Usuarios </a>   
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/cotizacion"><i class="fas fa-file-alt"></i> Cotizaciones</a>
                </li>
              </ul>
            </div>
        </nav>
  
      </div> <!-- /container -->
    
    
    <div role="main" class="container">
        @yield('contenido')
    </div>

</body>
</html>