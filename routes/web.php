<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminEstudiantesController;
use App\Http\Controllers\AdminPropuestasController;
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
Route::get('/admin/index/estudiantes', [AdminEstudiantesController::class, 'index'])->name('admin.index-estudiantes');
Route::get('/admin/show/{estudiante}/propuestas', [AdminPropuestasController::class, 'show'])->name('admin.show-propuestas');
Route::get('/admin/edit/{estudiante}/{propuesta}',[AdminPropuestasController::class, 'edit'])->name('admin.edit-propuesta');