<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Estudiante;

class ProfesoresEstudiantesController extends Controller
{
    public function show(Profesor $profesor){
        $estudiantes = Estudiante::all();
        return view('profesores.show-estudiantes', compact(['profesor','estudiantes']));
    }
}
