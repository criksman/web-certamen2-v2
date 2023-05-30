<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudiantesController extends Controller
{
    public function index(){
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }
}
