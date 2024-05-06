<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaginaInicioController;


//Login
Route::view('/', "login")->name('login');
Route::view('/login', "login")->name('login');
Route::view('/registro', "register")->name('registro');

Route::post('/validar-registro', [LoginController::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class,'login'])->name('inicia-sesion');
Route::post('/logout', [LoginController::class,'logout'])->name('logout');

// Rutas para página de inicio
Route::prefix('pagina-inicio')->middleware('auth')->group(function () {
    Route::get('/convalidar-cursos', [PaginaInicioController::class, 'convalidarCursos'])->name('pagina-inicio.convalidar-cursos');
    Route::get('/historial-convalidaciones', [PaginaInicioController::class, 'historialConvalidaciones'])->name('pagina-inicio.historial-convalidaciones');
    Route::get('/postulantes-registrar', [PaginaInicioController::class, 'postulantesRegistrar'])->name('pagina-inicio.postulantes-registrar');
    Route::get('/postulantes-visualizar', [PaginaInicioController::class, 'postulantesVisualizar'])->name('pagina-inicio.postulantes-visualizar');
});

/*
pagina-inicio/convalidar-cursos
pagina-inicio/historial-convalidaciones
pagina-inicio/postulantes-registrar
pagina-inicio/postulantes-visualizar
*/