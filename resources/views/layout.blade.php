<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        /* Estilos generales */
        body {
            background-color: #1a1a1a;
            color: #d1d1d1;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Encabezado */
        header {
            background-color: #2d2d2d;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #333333;
            padding: 10px;
        }

        nav a {
            color: #d1d1d1;
            text-decoration: none;
            padding: 10px;
            margin: 5px;
        }

        nav a:hover {
            background-color: #4d4d4d;
        }

        /* Contenido principal */
        main {
            padding: 20px;
        }

        /* Pie de página */
        footer {
            background-color: #2d2d2d;
            color: #d1d1d1;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>CONVALIDACIÓN Y ASIGNACIÓN UC</h1>
    </header>
    <nav>
        <a href="#">Inicio</a>
        <a href="#">Acerca de</a>
        <a href="#">Contacto</a>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        &copy; {{ date('Y') }} CONVALIDACIÓN Y ASIGNACIÓN UC. Todos los derechos reservados.
    </footer>
</body>
</html>