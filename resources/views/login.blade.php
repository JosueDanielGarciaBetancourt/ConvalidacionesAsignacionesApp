<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <style>
        /* Estilos para hacer más grande el campo de entrada */
        input[type="email"],
        input[type="password"] {
            width: 20%;
            padding: 3px;
            box-sizing: border-box; /* Asegura que el padding no afecte el ancho total */
        }
    </style>
</head>
<body>
    <h2>Iniciar sesión</h2>
    <form action="{{route('inicia-sesion')}}" method="POST">
        @csrf
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="checkbox" id="mantener_sesion" name="mantener_sesion">
        <label for="mantener_sesion">Mantener sesión iniciada</label>

        <p>¿No tienes cuenta? <a href="{{route('registro')}}">Regístrate</a></p>
        <input type="submit" value="Acceder">
        
        <br><br>
        @if ($errors->has('email'))
        <div class="alert alert-danger">
            {{ $errors->first('email') }}
        </div>
        @endif
    </form>
</body>
</html>
