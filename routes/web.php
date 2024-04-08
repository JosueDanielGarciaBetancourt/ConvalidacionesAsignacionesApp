<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaginaInicioController;

Route::get('/', function () {
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
    Route::get('/contacto', [PaginaInicioController::class, 'contacto'])->name('pagina-inicio.contacto');
    Route::get('/cargar-documentos', [PaginaInicioController::class, 'cargarDocumentos'])->name('pagina-inicio.cargar-documentos');
});
