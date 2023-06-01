<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Propuesta;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class EstudiantesPropuestasController extends Controller
{
    public function index(Estudiante $estudiante){
        $propuestas = $estudiante->propuestas;
        return view('estudiantes.index-propuestas', compact(['estudiante','propuestas']));
    }

    public function store(Estudiante $estudiante, Request $request){
        //
    }
}
