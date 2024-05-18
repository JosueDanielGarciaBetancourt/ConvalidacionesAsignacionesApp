@extends('layout')

@section('title', 'Convalidar cursos')


<style>
:root {
	--blanco: #ffffff;
    --negro: #000;
	--oscuro: #2e1572;
	--oscuroOpaco: #2e1572b2;
	--primario: #0074ff; 
	--secundario: #687d9f;
	--gris: #c0c0c0;
	--grisClaro: #f3f3f3;
}

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	text-decoration: none;
	font-family: sans-serif;
}

/* GLOBALES */

html {
	font-size: 62.5%;
	box-sizing: border-box; /* HACK PARA BOX MODEL */
	scroll-snap-type: y mandatory;
}

body {
	font-size: 16px; /* 1 rem= 10px */
}

/* TIPOGRAFIA */

h1 {
	font-size: 3.8rem;
}

h2 {
	font-size: 2.8rem;
}

h3 {
	font-size: 1.8rem;
}

h1, h2, h3 {
	text-align: center;
}

body {
	margin-left: 8rem;
	margin-top: 8rem;
	transition: margin-left 300ms cubic-bezier(0.785, 0.135, 0.15, 0.86);
}

main {
	padding: 2rem;
}

header {
	width: 100%;
	height: 8rem;
	background: var(--grisClaro);
	display: flex;
	align-items: center;
	position: fixed;
	top: 0;
	z-index: 200;
}

.icon__menu {
	width: 5rem;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	transform: translateX(10px);
}

.icon__menu i {
	font-size: 2rem;
	cursor: pointer;
	position: absolute;
}

.menu__side {
	width: 200px;
	height: 100%;
	background: #008000;
	position: fixed;
	top: 0;
	left: 0;
	font-size: 18px;
	z-index: 300;
    text-align: left;
}

.name__page {
	padding: 2rem 3rem;
	display: flex;
	align-items: center;
	margin-top: 1rem;
}

.name__page i {
	width: 2rem;
	margin-right: 2rem;
}

.options__menu button {
    color: var(--oscuroOpaco);
    cursor: pointer;
    display: flex;
    align-items: center;
    position: relative;
    background: none;
    border: none;
    padding: 0;
    font: inherit;
    transition: color 300ms;
}

.options__menu button:hover {
    color: white;
}

.options__menu button .fa-solid {
    width: 2rem;
    margin-right: 2rem;
    cursor: pointer;
}

.options__menu button h4 {
    font-weight: 300; /* MAS DELGADO */
    cursor: pointer;
}

.options__menu {
	padding: 2rem 3rem;
	position: absolute;
	top: 8rem;
}

.options__menu a {
	color: var(--oscuroOpaco);
	cursor: default;
	display: block;
	position: relative;
	transition: color 300ms;
}

.options__menu a:hover {
	color: white;
}

.options__menu .option {
	padding: 2rem 0px;
	display: flex;
	align-items: center;
	position: relative;
}

.options__menu .option i {
	width: 2rem;
	margin-right: 2rem;
	cursor: pointer;
}

.options__menu .option h4 {
	font-weight: 300; /* MAS DELGADO */
	cursor: pointer;
}

a.selected {
	color: ;
}

.selected::before {
	content: '';
	width: 3px;
	height: 80%;
	background: var(--oscuro);
	position: absolute;
	top: 10%;
	left: -3rem;
}

/*CLASES PARA USAR EN JS*/

.body_move {
	margin-left: 25rem;
}

.menu__side_move {
	width: 25rem;
}
</style>

@section('content')
    <header>
        <div class="icon__menu">
            <i class="fa-solid fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa-solid fa-facebook"></i>
            <h4>CONTINENTAL</h4>
        </div>

        <div class="options__menu">


            <a href="#">
                <div class="option">
                    <i class="fa-solid fa-hand-holding-dollar" title="Convalidacion"></i>
                    <h4>Convalidacion</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="fa-solid fa-screwdriver-wrench" title="Historial de convalidaciones"></i>
                    <h4>Historial de convalidaciones</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="fa-solid fa-user-group" title="Postulantes"></i>
                    <h4>Postulantes</h4>
                </div>
            </a>
			<br><br><br>
			<form method="POST" action=" {{ route('logout') }}">
				@csrf <!-- Agrega el token CSRF -->
				<button type="submit" class="option">
					<i class="fa-solid fa-sign-out-alt" title="Log Out"></i>
					<h4>Cerrar sesión</h4>
				</button>
			</form>
        </div>
    </div>
@endsection