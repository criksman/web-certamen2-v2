<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Propuesta;

class AdminProfesoresController extends Controller
{
    public function index(){
        $profesores = Profesor::all();
        return view('admin.index-profesores', compact('profesores'));
    }


}
