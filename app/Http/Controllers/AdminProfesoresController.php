<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class AdminProfesoresController extends Controller
{
    public function index(){
        $profesores = Profesor::all();
        return view('admin.index-profesores', compact('profesores'));
    }

    public function create(){
        return view('admin.create-profesores');
    }

    public function store(Request $request){
        $profesor = new Profesor();
        $profesor->rut = $request->rut;
        $profesor->nombre = $request->nombre;
        $profesor->apellido = $request->apellido;
        $profesor->save();

        return redirect()->route('admin.index-profesores');
    }

}
