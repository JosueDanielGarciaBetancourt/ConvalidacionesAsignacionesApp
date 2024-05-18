@extends('layout')

@section('title', 'Registrar postulante')

@section('content')

@section('content')

<div class="menu">
    <ion-icon name="menu-outline"></ion-icon>
    <ion-icon name="close-outline"></ion-icon>
</div>

    <div class="barra-lateral">
        <div>
            <div class="nombre-pagina" onclick="toggleMenu()">
                <ion-icon name="school-outline" class="cerrar-menu"></ion-icon>
                <img src="{{ asset('ConvalidacionesWeb/public/images/logo-universidad-continental.webp') }}" alt="logo_UC">
            </div>
        </div>

        <nav class="navegacion">
            <ul>
                <li>
                    <a href="#">
                        <ion-icon name="book-outline"></ion-icon>
                        <span>Convalidarxd cursos</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Historial de convalidaciones</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="person-outline"></ion-icon>
                        <span>Postulante</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="#">Registrar Postulantes</a></li>
                        <li><a href="#">Ver Historial de Postulantes</a></li>
                    </ul>
                </li>
                
            </ul>
        </nav>

    </div>
<main>
    <div class="center">
        <h1 class="title">Registrar Postulante</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form id="register_form" method="POST" action="{{ route('pagina-inicio.postulantes-registrar.store') }}">
            @csrf
            <label for="idPostulante">DNI:</label>
            <input type="text" id="idPostulante" name="idPostulante" required>
            @error('dni')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <label for="nombrePostulante">Nombre Completo:</label>
            <input type="text" id="nombrePostulante" name="nombrePostulante" required>
            @error('nombrePostulante')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <label for="carreraProcedenciaPostulante">Carrera de procedencia:</label>
            <input type="text" id="carreraProcedenciaPostulante" name="carreraProcedenciaPostulante" required>
            @error('carreraProcedenciaPostulante')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <label for="institucionProcedenciaPostulante">Institución de procedencia:</label>
            <input type="text" id="institucionProcedenciaPostulante" name="institucionProcedenciaPostulante" required>
            @error('institucionProcedenciaPostulante')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <div class="form-buttons">

                <button type="submit" class="register-btn">Registrar</button>
                <button type="reset" class="clear-btn">Limpiar</button>
            </div>
        </form>
    </div>
</main>

<style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@500&display=swap');

    :root {
        --color-barra-lateral: rgb(255, 255, 255);
        --color-texto: rgb(0, 0, 0);
        --color-texto-menu: rgb(134, 136, 144);
        --color-menu-hover: rgb(238, 238, 238);
        --color-menu-hover-texto: rgb(0, 0, 0);
        --color-boton: rgb(0, 0, 0);
        --color-boton-texto: rgb(255, 255, 255);
        --color-linea: rgb(180, 180, 180);
        --color-switch-base: rgb(201, 202, 206);
        --color-switch-circulo: rgb(241, 241, 241);
        --color-scroll: rgb(192, 192, 192);
        --color-scroll-hover: rgb(134, 134, 134);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Outfit', sans-serif;
    }

    body {
    height: 100vh;
    width: 100%;
    background-image: url('{{ asset('ConvalidacionesWeb/public/images/fondoregistro.jpg') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    }

    .menu {
        position: fixed;
        width: 50px;
        height: 50px;
        font-size: 30px;
        display: none;
        justify-content: left;
        align-items: left;
        border-radius: 50%;
        cursor: pointer;
        background-color: var(--color-boton);
        color: var(--color-boton-texto);
        right: 15px;
        top: 4px;
        z-index: 100;
    }

    
    .barra-lateral {
        position: fixed;
        display: flex;
        flex-direction: column;
        justify-content: flex-start; 
        width: 320px;
        height: 100%;
        overflow: hidden;
        padding: 20px 15px;
        background-color: var(--color-barra-lateral);
        transition: width 0.5s ease, background-color 0.3s ease, left 0.5s ease;
        z-index: 50;
        left: 0; 
        top: 0; 
    }
    .mini-barra-lateral {
        width: 70px;
        padding: 10px;
    }

    .barra-lateral span {
        width: 100px;
        white-space: nowrap;
        font-size: 18px;
        text-align: left;
        opacity: 1;
        transition: opacity 0.5s ease, width 0.5s ease;
    }

    .barra-lateral span.oculto {
        opacity: 0;
        width: 0;
    }
       
    .navegacion .sub-menu {
        display: none;
        padding-left: 20px; 
    }

    .navegacion li:hover .sub-menu {
        display: block; 
    }

    .navegacion .sub-menu li {
        margin-bottom: 5px;
    }

    .navegacion .sub-menu a {
        display: block;
        color: var(--color-texto-menu); 
        text-decoration: none;
        padding: 5px 0;
        transition: background-color 0.3s ease, color 0.3s ease; 
    }

    .navegacion .sub-menu a:hover {
        background-color: var(--color-menu-hover); 
        color: var(--color-menu-hover-texto); 
    }


    /* Nombre de la página */
    .barra-lateral .nombre-pagina {
        width: 100%;
        height: 45px;
        color: var(--color-texto);
        margin-bottom: 40px;
        display: flex;
        align-items: center;
    }

    .barra-lateral .nombre-pagina ion-icon {
        min-width: 50px;
        font-size: 40px;
        cursor: pointer;
    }

    .barra-lateral .nombre-pagina img {
        margin-left: 10px;
        max-height: 40px;
    }
    .nombre-pagina img {
        margin-left: 10px;
        max-height: 60px; 
        width: auto; 
    }

    /* Botón */
    .barra-lateral .boton {
        width: 100%;
        height: 45px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        border-radius: 10px;
        background-color: var(--color-boton);
        color: var(--color-boton-texto);
    }

    .barra-lateral .boton ion-icon {
        min-width: 50px;
        font-size: 25px;
    }

    /* Menu Navegación */
    .barra-lateral .navegacion {
        height: 100%;
        overflow-y: auto;
        overflow-x: hidden;
    }

    .barra-lateral .navegacion::-webkit-scrollbar {
        width: 5px;
    }

    .barra-lateral .navegacion::-webkit-scrollbar-thumb {
        background-color: var(--color-scroll);
        border-radius: 5px;
    }

    .barra-lateral .navegacion::-webkit-scrollbar-thumb:hover {
        background-color: var(--color-scroll-hover);
    }


    .barra-lateral .navegacion li {
        list-style: none;
        display: flex;
        margin-bottom: 5px;
    }

    .barra-lateral .navegacion a {
        width: 100%;
        height: 45px;
        display: flex;
        align-items: center;
        text-decoration: none;
        border-radius: 10px;
        color: var(--color-texto-menu);
    }

    .barra-lateral .navegacion a:hover {
        background-color: var(--color-menu-hover);
        color: var(--color-menu-hover-texto);
    }

    .barra-lateral .navegacion ion-icon {
        min-width: 50px;
        font-size: 20px;
    }



    main {

        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 1.7em;
    }

    .center {
        text-align: center;
    }

    .title {
        margin-bottom: 25px;
        color: #fff;
        font-size: 32px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }

    form {
        background: #fff;
        padding: 18px 20px; 
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
        width: 155%;
        max-width: 400px;
        text-align: left;
        margin: auto; 
        
    }

    form label {
        margin-bottom: 10px;
        font-weight: bold;
        color: #333;
        display: block;
        text-align: left;
        width: 100%;
        white-space: nowrap; 
    }

    form input {
        margin-bottom: 15px;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: calc(105% - 22px); 
    }

    form input:focus {
        border-color: #666;
        outline: none;
    }

    .form-buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .form-buttons button {
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease, color 0.3s ease;
        border-radius: 6px;
    }

    .form-buttons button.register-btn {
        background-color: #6757DF;
        color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-buttons button.register-btn:hover {
        background-color: #92a9b8;
        transform: translateY(-2px);
    }

    .form-buttons button.clear-btn {
        background-color: white;
        color: #ADC0C7;
        border: 1px solid #ADC0C7;
    }

    .form-buttons button.clear-btn:hover {
        background-color: #ADC0C7;
        color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
        .barra-lateral {
        width: 80px;
    }

    .barra-lateral.max-barra-lateral {
        width: 250px;
    }

    .barra-lateral.mini-barra-lateral span {
        opacity: 1;
        width: 100px;
    }

    .barra-lateral.mini-barra-lateral .nombre-pagina {
        justify-content: center;
    }

    .barra-lateral.mini-barra-lateral .nombre-pagina ion-icon {
        margin-right: 10px;
    }

    .barra-lateral.mini-barra-lateral .nombre-pagina img {
        display: none}

    .barra-lateral.mini-barra-lateral .boton {
        width: 100%;
        justify-content: center;
    }

    .barra-lateral.mini-barra-lateral .boton ion-icon {
        margin-right: 10px;
    }

    .barra-lateral.mini-barra-lateral .navegacion {
        display: none;
    }

    .barra-lateral.mini-barra-lateral .switch {
        justify-content: center;
    }

    .barra-lateral.mini-barra-lateral .usuario {
        justify-content: center;
    }

    .barra-lateral.mini-barra-lateral .usuario img {
        margin-right: 10px;
    }

    .barra-lateral.mini-barra-lateral .modo-oscuro {
        flex-direction: column;
    }

    .barra-lateral.mini-barra-lateral .modo-oscuro .info {
        width: 100%;
        justify-content: center;
    }

    .barra-lateral.mini-barra-lateral .modo-oscuro .switch {
        justify-content: center;
    }

    .barra-lateral.mini-barra-lateral .modo-oscuro .switch ion-icon {
        margin-right: 10px;
    }

    .barra-lateral.mini-barra-lateral .usuario {
        margin-top: auto;
    }
        main {
            margin-top: 90px;
        }

        form {
            padding: 15px;
        }

        .form-buttons button {
            font-size: 14px;
        }

        .form-buttons {
            flex-direction: column; 
        }

        .form-buttons button {
            width: 100%; 
            margin-bottom: 10px; 
        }

        .form-buttons button:last-child {
            margin-bottom: 0; 
        }
    }
</style>

<script>
    
const cloud = document.querySelector("ion-icon[name='school-outline']");
const barraLateral = document.querySelector(".barra-lateral");
const spans = document.querySelectorAll("span");
const palanca = document.querySelector(".switch");
const circulo = document.querySelector(".circulo");
const menu = document.querySelector(".menu");
const main = document.querySelector("main");

menu.addEventListener("click",()=>{
    barraLateral.classList.toggle("max-barra-lateral");
    if(barraLateral.classList.contains("max-barra-lateral")){
        menu.children[0].style.display = "none";
        menu.children[1].style.display = "block";
    }
    else{
        menu.children[0].style.display = "block";
        menu.children[1].style.display = "none";
    }
    if(window.innerWidth<=320){
        barraLateral.classList.add("mini-barra-lateral");
        main.classList.add("min-main");
        spans.forEach((span)=>{
            span.classList.add("oculto");
        })
    }
    });

  

    cloud.addEventListener("click",()=>{
        barraLateral.classList.toggle("mini-barra-lateral");
        main.classList.toggle("min-main");
        spans.forEach((span)=>{
            span.classList.toggle("oculto");
        });
    });
</script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

@endsection

