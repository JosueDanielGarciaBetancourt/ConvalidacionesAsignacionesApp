<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Convalidaciones App</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos adicionales -->
    <style>
        body {
            padding-top: 20px;
        }
        .container {
            max-width: 600px;
        }
        .btn-logout {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Bienvenido a Convalidaciones App</h1>
        @auth
        <p>Hola {{ Auth::user()->name }}</p>
        @endauth
        
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-primary btn-logout">Cerrar sesión</button>
        </form>
    </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
