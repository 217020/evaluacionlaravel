<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bienvenidos', function(){
    return "Bienvenidoa al curso de fundamento de programacion web";
});

Route::get('/saulisaac', function(){

    return "hola mi nombre es saul isaacphp";

});


Route::get('/login', function () {
    return view('login');
});
Route::get('/({name}/{apellido?})',function {
    $name $apellido = null
        return View('estudiante')->with('apellido', $apellido);

        Route::get('/estudiante/facultad/{name}/{apellido})',function);
              return View('apellido')->with('name', $name);

              Route::get('/{name}/{apellido}', $apellido)

              Route::get('profesor',[ProfesorController::class,'index']);
              Route::get('profesorsave',[ProfesorController::class,'index']);
              Route::get('profesor',[ProfesorController::class,'index']);
              Route::get('profesor',[ProfesorController::class,'index']);
     
});

