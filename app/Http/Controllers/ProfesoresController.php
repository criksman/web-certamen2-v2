<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesoresController extends Controller
{
    public function index(){
        $profesores = Profesor::all();
        return view('profesores.index', compact('profesores'));
    }
}
