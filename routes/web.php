<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControler;
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

Route::get('/', HomeControler::class)->name('home');


Route::resource('asignaturas',CursoController::class)->parameters(['asignaturas'=>'curso'])->names('cursos');
Route::view('nosotros','nosotros')->name('nosotros');
Route::get('contactanos.index', function (){
    $correo = new ContactanosMailable;
    Mail::to('ignacio.andrade8033@alumnos.udg.mx')->send($correo);

    return "Mensaje enviado";
})->name('contactanos');
