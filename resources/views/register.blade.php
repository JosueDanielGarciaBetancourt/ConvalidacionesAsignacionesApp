@extends('layout')

@section('title', 'Registro')

@section('content')
    <h2>Registro</h2>
    <form action="{{ route('validar-registro') }}" method="POST">
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
@endsection
