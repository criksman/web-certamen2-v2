<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Propuesta;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;

class EstudiantesPropuestasController extends Controller
{
    public function index(Estudiante $estudiante){
        $propuestas = $estudiante->propuestas;
        return view('estudiantes.index-propuestas', compact(['estudiante','propuestas']));
    }

    public function store(Estudiante $estudiante, Request $request){
        $documento = $request->documento;
        
        $documento_direccion = 'public/documentos/pdf';
        $documento_nombre = $documento->getClientOriginalName();
        
        $path = $request->file('documento')->storeAs($documento_direccion, $documento_nombre);
        
        $propuesta = new Propuesta();
        $propuesta->documento = $documento_nombre;
        $propuesta->estudiante_rut = $estudiante->rut;
        $propuesta->fecha = Carbon::now();
        $propuesta->estado = 0;
        $propuesta->save();

        return redirect()->route('estudiantes.index-propuestas', compact('estudiante'));
    }

    public function download(Estudiante $estudiante, Propuesta $propuesta){
        $documento_nombre = $propuesta->documento;
        $documento = storage_path('app/public/documentos/pdf/' . $documento_nombre);

        return response()->download($documento);
    }
}
