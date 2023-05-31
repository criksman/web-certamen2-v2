<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminEstudiantesController;
use App\Http\Controllers\AdminPropuestasController;
use App\Http\Controllers\AdminProfesoresController;

use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\ProfesoresPropuestasController;
use App\Http\Controllers\ProfesoresEstudiantesController;

use App\Http\Controllers\EstudiantesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//   return view('welcome');
//});

Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');

//ADMIN-ESTUDIANTE
Route::get('/admin/estudiantes/index', [AdminEstudiantesController::class, 'index'])->name('admin.index-estudiantes');
Route::get('/admin/estudiantes/create', [AdminEstudiantesController::class, 'create'])->name('admin.create-estudiantes');
Route::post('/admin/estudiantes/store',[AdminEstudiantesController::class, 'store'])->name('admin.store-estudiantes');

//ADMIN-ESTUDIANTE-PROPUESTA
Route::get('/admin/estudiantes/{estudiante}/propuestas/show', [AdminPropuestasController::class, 'show'])->name('admin.show-propuestas');
Route::get('/admin/estudiantes/{estudiante}/propuestas/{propuesta}/edit',[AdminPropuestasController::class, 'edit'])->name('admin.edit-propuesta');
Route::put('/admin/{propuesta}/update',[AdminPropuestasController::class, 'update'])->name('admin.update-propuesta');

//ADMIN-PROFESORES
Route::get('/admin/profesores/index', [AdminProfesoresController::class, 'index'])->name('admin.index-profesores');
Route::get('/admin/profesores/create',[AdminProfesoresController::class, 'create'])->name('admin.create-profesores');
Route::post('/admin/profesores/store',[AdminProfesoresController::class, 'store'])->name('admin.store-profesores');

//PROFESORES
Route::get('/profesores/index',[ProfesoresController::class,'index'])->name('profesores.index');

//PROFESOR-ESTUDIANTE
Route::get('/profesores/{profesor}/estudiantes/show',[ProfesoresEstudiantesController::class,'show'])->name('profesores.show-estudiantes');

//PROFESOR-ESTUDIANTE-PROPUESTA
Route::get('/profesores/{profesor}/estudiantes/{estudiante}/propuestas/show',[ProfesoresPropuestasController::class, 'show'])->name('profesores.show-propuestas');
Route::get('/profesores/{profesor}/estudiantes/{estudiante}/propuestas/{propuesta}/comentario/create',[ProfesoresPropuestasController::class,'create'])->name('profesores.create-comentario');
Route::post('/profesores/{profesor}/estudiantes/{estudiante}/propuestas/{propuesta}/comentario/store',[ProfesoresPropuestasController::class,'store'])->name('profesores.store-comentario');

//ESTUDIANTE
Route::get('/estudiantes/index', [EstudiantesController::class, 'index'])->name('estudiantes.index');