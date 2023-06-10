<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\PropuestaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfesorPropuestaController;

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
Route::get('/',[HomeController::class,'index'])->name('index.index');

Route::get('index', function () {
    return view('index.index');
});
//Ingresar a la vista de administracion
Route::get('/admin/index', [AdminController::class, 'index'])->name('index.index_admin');


Route::resource('estudiantes', EstudianteController::class);
Route::get('/index/estudiantes', [EstudianteController::class, 'index'])->name('administrador.index_estudiantes');
Route::get('/crear/estudiantes', [EstudianteController::class, 'create'])->name('administrador.create_estudiantes');

Route::resource('profesores', ProfesorController::class);
Route::get('/index/profesores', [ProfesorController::class, 'index'])->name('administrador.index_profesores');
Route::get('/crear/profesores', [ProfesorController::class, 'create'])->name('administrador.create_profesores');

Route::get('/estudiantes', [EstudianteController::class, 'MostrarEstudiantes'])->name('propuestas.index_propuestas');
Route::get('/propuestas/enviar/{rut}', [PropuestaController::class, 'index'])->name('propuestas.estudiante_propuesta');
Route::post('/propuestas', [PropuestaController::class, 'store']) -> name('propuestas.store');

Route::get('/profesores', [ProfesorController::class, 'MostrarProfesores'])->name('profesores.index_profesor');
Route::get('/propuestas/revisar', [ProfesorController::class, 'MostrarProfesores'])->name('propuestas.revisar_propuestas');
Route::get('/propuestas/estudiantes', [EstudianteController::class, 'MostrarEstudiantes2'])->name('profesores.estudiantes_propuestas');






//vista para comentarios
Route::get('/propuestas/comentario', [ProfesorPropuestaController::class, 'index'])->name('profesores.comentario');

Route::post('/propuestas/enviado', [ProfesorPropuestaController::class, 'store'])->name('profesoress.store');

Route::get('/ad/{estudiante}', [EstudianteController::class, 'Mostrar']) ->name('ad.mostrar');