<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Estudiante;
use App\Models\Propuesta;
use Carbon\Carbon;

class ProfesoresComentariosController extends Controller
{
    public function create(Profesor $profesor, Estudiante $estudiante, Propuesta $propuesta){
        return view('profesores.create-comentario', compact(['profesor', 'estudiante', 'propuesta']));
    }

    //falta cambiar el formato de la fecha
    public function store(Profesor $profesor, Estudiante $estudiante, Propuesta $propuesta, Request $request){
        $profesor->propuestas()->attach($propuesta, ['fecha' => Carbon::now()->toDateString(), 'hora' => Carbon::now()->toTimeString(), 'comentario' => $request->comentario]);
        return redirect()->route('profesores.show-propuestas', compact(['profesor', 'estudiante']));
    }

    public function destroy(Profesor $profesor, Estudiante $estudiante, Propuesta $propuesta){
        $profesor->propuestas()->detach($propuesta->id);
        return redirect()->route('profesores.show-propuestas', compact(['profesor', 'estudiante']));
    }

    public function update(Profesor $profesor, Estudiante $estudiante, Propuesta $propuesta, Request $request){
        $profesor->propuestas()->updateExistingPivot($propuesta->id, ['comentario' => $request->comentario]);
        return redirect()->route('profesores.show-propuestas', compact(['profesor', 'estudiante']));
    }

    public function edit(Profesor $profesor, Estudiante $estudiante, Propuesta $propuesta){
        return view('profesores.edit-comentario', compact(['profesor', 'estudiante', 'propuesta']));
    }
}