<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaInicioController extends Controller
{
    public function index()
    {
        return view('Inicio.paginaInicio');
    }

    public function cargarDocumentos()
    {
        return view('Inicio.cargarDocumentos');
    }

    public function contacto()
    {
        return view('paginaIInicionicio.contacto');
    }
}
