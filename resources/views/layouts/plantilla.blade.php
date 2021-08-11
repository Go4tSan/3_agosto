<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Freelancer</title>
    <meta name="viewport"
 content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet"> <!--Hace que en todos los navegadores se vea igual-->
    <link rel="preconnect" href="https://fonts.gstatic.com"> <!--Insertar fuentes de Google-->
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}"> <!--Hace que cargue más rapido la página-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> <!--boopstrap-->
</head>
<body>

    <header>
        <h1 class="titulo">Richarth Madera <span>Desarrollador</span></h1>
    </header>
        <div class="navbar"> <!--Clase de utilidad-->
        <nav class="navegacion-principal contenedor">
           <a class="nav-link active" aria-current="page" href="/">inicio</a>
           <a class="nav-link active" aria-current="page" href="sobre mi">Sobre mi</a>
           <a class="nav-link active" aria-current="page" href="clientes">clientes</a>
           <a class="nav-link" href="contacto">contacto</a>
        </nav>
    </div>


    @yield('contenido')

                <!--Footer-->
                <footer class="footer">
                    <p>Todos los derechos reservados.<br> Propiedad de CTM_GoatSan&reg !!!</p>
                </footer>
            <!-- End Footer-->
</body>
</html>
