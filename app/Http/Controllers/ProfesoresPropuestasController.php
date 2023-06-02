<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Estudiante;
use App\Models\Propuesta;
use Carbon\Carbon;

class ProfesoresPropuestasController extends Controller
{
    public function show(Profesor $profesor, Estudiante $estudiante){
        $propuestas = $estudiante->propuestas;
        return view('profesores.show-propuestas', compact(['estudiante', 'propuestas', 'profesor']));
    }

    public function download(Profesor $profesor, Estudiante $estudiante, Propuesta $propuesta){
        $documento_nombre = $propuesta->documento;
        $documento = storage_path('app/public/documentos/pdf/' . $documento_nombre);

        return response()->download($documento);
    }

}
