<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminEstudiantesController;
use App\Http\Controllers\AdminPropuestasController;
use App\Http\Controllers\AdminProfesoresController;

use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\ProfesoresPropuestasController;
use App\Http\Controllers\ProfesoresEstudiantesController;
use App\Http\Controllers\ProfesoresComentariosController;

use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\EstudiantesPropuestasController;
use App\Http\Controllers\EstudiantesComentariosController;

use App\Http\Controllers\HomeController;

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
Route::get('/admin/estudiantes/{estudiante}/propuestas/show',[AdminPropuestasController::class, 'show'])->name('admin.show-propuestas');
Route::get('/admin/estudiantes/{estudiante}/propuestas/{propuesta}/edit',[AdminPropuestasController::class, 'edit'])->name('admin.edit-propuesta');
Route::put('/admin/estudiantes/{estudiante}/propuestas/{propuesta}/update',[AdminPropuestasController::class, 'update'])->name('admin.update-propuesta');

//ADMIN-PROFESORES
Route::get('/admin/profesores/index',[AdminProfesoresController::class, 'index'])->name('admin.index-profesores');
Route::get('/admin/profesores/create',[AdminProfesoresController::class, 'create'])->name('admin.create-profesores');
Route::post('/admin/profesores/store',[AdminProfesoresController::class, 'store'])->name('admin.store-profesores');

//PROFESORES
Route::get('/profesores/index',[ProfesoresController::class,'index'])->name('profesores.index');

//PROFESOR-ESTUDIANTE
Route::get('/profesores/{profesor}/estudiantes/show',[ProfesoresEstudiantesController::class,'show'])->name('profesores.show-estudiantes');

//PROFESOR-ESTUDIANTE-PROPUESTA
Route::get('/profesores/{profesor}/estudiantes/{estudiante}/propuestas/show',[ProfesoresPropuestasController::class, 'show'])->name('profesores.show-propuestas');
Route::get('/profesores/{profesor}/estudiantes/{estudiante}/propuestas/{propuesta}/download', [ProfesoresPropuestasController::class, 'download'])->name('profesores.download-propuesta');

//PROFESOR-COMENTARIO
Route::get('/profesores/{profesor}/estudiantes/{estudiante}/propuestas/{propuesta}/comentario/create',[ProfesoresComentariosController::class,'create'])->name('profesores.create-comentario');
Route::post('/profesores/{profesor}/estudiantes/{estudiante}/propuestas/{propuesta}/comentario/store',[ProfesoresComentariosController::class,'store'])->name('profesores.store-comentario');
Route::delete('/profesores/{profesor}/estudiantes/{estudiante}/propuestas/{propuesta}/comentario/destroy',[ProfesoresComentariosController::class,'destroy'])->name('profesores.destroy-comentario');
Route::get('/profesores/{profesor}/estudiantes/{estudiante}/propuestas/{propuesta}/comentario/edit',[ProfesoresComentariosController::class,'edit'])->name('profesores.edit-comentario');
Route::put('/profesores/{profesor}/estudiantes/{estudiante}/propuestas/{propuesta}/comentario/update',[ProfesoresComentariosController::class, 'update'])->name('profesores.update-comentario');

//ESTUDIANTE
Route::get('/estudiantes/index', [EstudiantesController::class, 'index'])->name('estudiantes.index');

//ESTUDIANTE-PROPUESTA
Route::get('/estudiantes/{estudiante}/propuestas/index', [EstudiantesPropuestasController::class, 'index'])->name('estudiantes.index-propuestas');
Route::get('/estudiantes/{estudiante}/propuestas/{propuesta}/comentarios/show', [EstudiantesComentariosController::class, 'show'])->name('estudiantes.show-comentarios');
Route::post('/estudiantes/{estudiante}/propuestas/store', [EstudiantesPropuestasController::class, 'store'])->name('estudiantes.store-propuesta');
Route::get('/estudiantes/{estudiante}/propuestas/{propuesta}/download', [EstudiantesPropuestasController::class, 'download'])->name('estudiantes.download-propuesta');

//HOME
Route::get('/', [HomeController::class, 'index'])->name('home.index');