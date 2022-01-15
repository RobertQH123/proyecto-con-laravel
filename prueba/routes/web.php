<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class);

Route::get('cursos', [CursoController::class,'index'])->name('cursos.index');

Route::get('cursos/create', [CursoController::class,'create'])->name('cursos.create');

Route::post('cursos',[CursoController::class,'store'])->name('cursos.store');

Route::get('cursos/{id}', [CursoController::class,'show'])->name('cursos.show');

Route::get('cursos/{id}/edit', [CursoController::class,'edit'])->name('cursos.edit');

// Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria = null) {
//     if($categoria){
//         return view("welcome to : $curso de categoria $categoria");
//     }else{
//         return view("welcome to : $curso");
//     }
// });