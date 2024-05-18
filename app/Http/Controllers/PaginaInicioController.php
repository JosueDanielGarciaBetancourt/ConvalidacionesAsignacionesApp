<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postulante;

class PaginaInicioController extends Controller
{
    
    public function convalidarCursos()
    {
        return view('Inicio.convalidarCursos');
    }

    public function historialConvalidaciones()
    {
        return view('Inicio.historialConvalidaciones');
    }

    public function postulantesRegistrar()
    {
        return view('Inicio.postulantesRegistrar');
    }

    public function postulantesVisualizar()
    {
        return view('Inicio.postulantesVisualizar');
    }

}
