<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaInicioController extends Controller
{
    public function index()
    {
        return view('Inicio.paginaInicio');
    }

    public function convalidacionEstudiante()
    {
        return view('Inicio.convalidacionEstudiante');
    }

    public function asignacionDocente()
    {
        return view('Inicio.asignacionDocente');
    }
}
