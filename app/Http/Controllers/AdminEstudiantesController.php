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

    public function create(){
        return view('admin.create-estudiantes');
    }

    public function store(Request $request){
        $estudiante = new Estudiante();
        $estudiante->rut = $request->rut;
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->email = $request->email;
        $estudiante->save();
        
        return redirect()->route('admin.index-estudiantes');
    }
}
