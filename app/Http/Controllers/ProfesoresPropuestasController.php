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

}
