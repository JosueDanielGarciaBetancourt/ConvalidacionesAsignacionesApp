@extends('layout')

@section('title', 'Inicio de sesión')

@section('content')
    <div class="main_container">
        <div class="logo_UC_container">
            <img src="{{ asset('ConvalidacionesWeb/public/images/logo_UC.png') }}" alt="logo_UC">
        </div>

        <br>
        <div class="title_container">	
            <h1>CONVALIDACIONES EAP SISTEMAS E INFORMÁTICA</h1>
        </div>		

        <br><br><br>

        <div class="otherText_container">	
            <h3>Iniciar sesión</h3>
        </div>	

        <form action="{{ route('inicia-sesion') }}" method="POST">
            @csrf
            
            <div class="subtitle_container">	
                <h2>Correo electónico</h2>
            </div>		

            <input class="credential-box-input" type="email" id="email" name="email" required placeholder="Ingrese email"><br>
            
            <div class="subtitle_container">	
                <h2>Contraseña</h2>
            </div>		

            <input class="credential-box-input" type="password" id="password" name="password" required placeholder="Ingrese password"><br>
            <br>
            <div class="remember_check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Mantener sesión iniciada</label>
            </div>

            <br>
            <input type="submit" value="Acceder" class="login_button">
            <br><br>
            
            @if ($errors->has('email'))
            <div class="alert alert-danger">
                {{ $errors->first('email') }}
            </div>
            @endif
        </form>
    </div>

    <div class="campusHyo_UC_container">
        <img src="{{ asset('ConvalidacionesWeb/public/images/campusHyo_UC.jpg') }}" alt="campusHyo_UC">
    </div>
    
@endsection
