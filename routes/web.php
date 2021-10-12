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
    return view('vista1');
});



/*
//Ejemplo 1 - Regresando texto
Route::get('/texto', function () {
    return '<h1>Esto es un texto</h1>';
});


//Ejemplo 2 - con array
Route::get('/arreglo', function () {
    $arreglo = ['Lunes','Martes', 'Miercoles'];
    return $arreglo;
});

//Ejemplo 3 - parametros
Route::get('/nombre/{nombre}', function ($nombre) {
    return '<h1>El nombre es: '.$nombre.'</h1>';
});

//Ejemplo 4 - parametros por default
Route::get('/cliente/{cliente?}', function ($cliente ='Cliente generado') {
    return '<h1>El nombre es: '.$cliente.'</h1>';
});

//Ejemplo 5
Route::get('/ruta1', function () {
    return '<h1>Esto es la ruta 1 </h1>';
})->name('rutaNro1');

Route::get('/ruta2', function () {
    //return '<h1>Esto es la ruta 2 </h1>';
    return redirect()-> route('rutaNro1');
});

//ejemplo 6
Route::get('/usuario/{usuario}', function ($usuario) {
    return '<h1>El usuario es: ' .$usuario.'</h1>';
})->where('usuario','[0-9]+');

Route::get('/usuario2/{usuario2}', function ($usuario2) {
    return '<h1>El usuario2 es: ' .$usuario2.'</h1>';
})->where('usuario2','[A-Za-z]+');
*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
});
