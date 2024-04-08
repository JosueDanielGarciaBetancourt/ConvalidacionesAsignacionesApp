@extends('layout')

@section('title', 'Iniciar sesión')

@section('content')
    <h2>Iniciar sesión</h2>
    <form action="{{ route('inicia-sesion') }}" method="POST">
        @csrf
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="checkbox" id="mantener_sesion" name="mantener_sesion">
        <label for="mantener_sesion">Mantener sesión iniciada</label>

        <p>¿No tienes cuenta? <a href="{{ route('registro') }}">Regístrate</a></p>
        <input type="submit" value="Acceder">
        
        <br><br>
        @if ($errors->has('email'))
        <div class="alert alert-danger">
            {{ $errors->first('email') }}
        </div>
        @endif
    </form>
@endsection
