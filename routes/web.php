<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminEstudiantesController;
use App\Http\Controllers\AdminPropuestasController;
use App\Http\Controllers\AdminProfesoresController;
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

//ADMIN-ESTUDIANTE
Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/estudiantes/index', [AdminEstudiantesController::class, 'index'])->name('admin.index-estudiantes');

//ADMIN-ESTUDIANTE-PROPUESTA
Route::get('/admin/estudiantes/{estudiante}/propuestas', [AdminPropuestasController::class, 'show'])->name('admin.show-propuestas');
Route::get('/admin/estudiantes/{estudiante}/{propuesta}/edit',[AdminPropuestasController::class, 'edit'])->name('admin.edit-propuesta');
Route::put('/admin/estudiantes/{propuesta}/update',[AdminPropuestasController::class, 'update'])->name('admin.update-propuesta');

//ADMIN-PROFESORES
Route::get('/admin/profesores/index', [AdminProfesoresController::class, 'index'])->name('admin.index-profesores');