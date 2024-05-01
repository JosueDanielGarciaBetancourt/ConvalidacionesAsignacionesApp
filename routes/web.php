<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaginaInicioController;

// default screen
Route::get('/welcome', function () {
    return view('welcome');
});


//Login
Route::view('/login', "login")->name('login');
Route::view('/registro', "register")->name('registro');

Route::post('/validar-registro', [LoginController::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class,'login'])->name('inicia-sesion');
Route::post('/logout', [LoginController::class,'logout'])->name('logout');

// Rutas para página de inicio
Route::prefix('pagina-inicio')->middleware('auth')->group(function () {
    Route::get('/', [PaginaInicioController::class, 'index'])->name('pagina-inicio');
    Route::get('/asignacion-docente', [PaginaInicioController::class, 'asignacionDocente'])->name('pagina-inicio.asignacion-docente');
    Route::get('/convalidacion-estudiante', [PaginaInicioController::class, 'convalidacionEstudiante'])->name('pagina-inicio.convalidacion-estudiante');
});
