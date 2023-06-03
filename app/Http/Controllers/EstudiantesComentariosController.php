<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Propuesta;

class EstudiantesComentariosController extends Controller
{
    public function show(Estudiante $estudiante, Propuesta $propuesta){ 
        return view('estudiantes.show-comentarios', compact(['estudiante', 'propuesta']));
    }
}
