<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h2>Registro</h2>
    <form action="{{route('validar-registro')}}" method="POST">
        @csrf
        <label for="name">Nombre:</label><br>
        <input type="name" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="confirm_password">Confirmar contraseña:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>

        <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
</body>
</html>
