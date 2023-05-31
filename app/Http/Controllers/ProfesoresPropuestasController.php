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

    public function create(Profesor $profesor, Estudiante $estudiante, Propuesta $propuesta){
        return view('profesores.create-comentario', compact(['profesor', 'estudiante', 'propuesta']));
    }

    //falta cambiar el formato de la fecha
    public function store(Profesor $profesor, Estudiante $estudiante, Propuesta $propuesta, Request $request){
        $propuesta->profesores()->attach($profesor, ['fecha' => Carbon::now()->toDateString(), 'hora' => Carbon::now()->toTimeString(), 'comentario' => $request->comentario]);
        return redirect()->route('profesores.show-propuestas', compact(['profesor', 'estudiante']));
    }

    public function destroy(){
        //
    }

}
