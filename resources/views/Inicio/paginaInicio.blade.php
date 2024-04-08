@extends('layout')

@section('title', 'Bienvenido a Convalidaciones App')

@section('content')
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
@endsection
