<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Propuesta;

class AdminPropuestasController extends Controller
{
    public function show(Estudiante $estudiante){
        $propuestas = $estudiante->propuestas;

        return view('admin.show-propuestas', compact(['propuestas', 'estudiante']));
    }

    public function edit(Estudiante $estudiante, Propuesta $propuesta){
        return view('admin.edit-propuesta', compact(['estudiante', 'propuesta']));
    }

    public function update(Request $request, Estudiante $estudiante, Propuesta $propuesta){
        $propuesta->estado = $request->estado;
        $propuesta->save();

        return redirect()->route('admin.show-propuestas', compact(['estudiante', 'propuesta']));
    }
}
