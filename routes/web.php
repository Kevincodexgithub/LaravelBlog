<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
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

// Route::get('/', function () {
//     // return view('welcome');
//     return "Bienvenido a la pagina principal";
// });

Route::get('/', HomeController::class)->name('home');

Route::view('nosotros', 'nosotros')->name('nosotros');

// Route::get('cursos', function () {
//     return "Bienvenido a la pagina cursos";
// });

//Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

// Route::get('cursos/create', function () {
//     return "En esta pagina podras crear un curso";
// });
//Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

//Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

// Route::get('cursos/{curso}', function ($curso) {
//     return "Bienvenido al curso " . $curso;
// });

//Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

//Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

//Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');

//Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');
/**
 * TODO: El simbolo (?) despues de la variable significa que la variable es opcional al pasarle por la URL
 */
// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
//     if ($categoria) {
//         return "Bienvenido al curso $curso, de la categoria $categoria";
//     } else {
//         return "Bienvenido al curso " . $curso;
//     }
// });

Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');

Route::get('contactanos', function () {
    $correo = new ContactanosMailable;
    Mail::to('kevintauro95@gmail.com')->send($correo);

    return "Mensaje enviado";
});
