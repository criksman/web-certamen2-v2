<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class AdminEstudiantesController extends Controller
{
    public function index(){
        $estudiantes = Estudiante::all();
        return view('admin.index-estudiantes', compact('estudiantes'));
    }
}
