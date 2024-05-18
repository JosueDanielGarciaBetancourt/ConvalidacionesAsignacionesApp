<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postulante;

class RegistroPostulanteController extends Controller
{
    public function postulantesRegistrar()
    {
        return view('inicio.postulantesRegistrar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'idPostulante' => 'required|max:8',
            'nombrePostulante' => 'required|string|max:255',
            'carreraProcedenciaPostulante' => 'required|string|max:255',
            'institucionProcedenciaPostulante' => 'required|string|max:255',
        ]);

        $postulante = new Postulante;
        $postulante->idPostulante = $request->idPostulante;
        $postulante->nombrePostulante = $request->nombrePostulante;
        $postulante->carreraProcedenciaPostulante = $request->carreraProcedenciaPostulante;
        $postulante->institucionProcedenciaPostulante = $request->institucionProcedenciaPostulante;
        $postulante->save();

        return redirect()->route('pagina-inicio.postulantes-registrar')->with('success');
    }
}
