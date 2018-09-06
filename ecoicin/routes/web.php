<?php

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
    return view('index');
})->name('index');

Route::get('/quienes_somos', function () {
    return view('quienes_somos');
})->name('quienes_somos');

Route::get('/trabajamos_para_usted', function () {
    return view('trabajamos_para_usted');
})->name('trabajamos_para_usted');

Route::get('/repositorio', function () {
    return view('repositorio');
})->name('repositorio');

Route::get('/contactanos', function () {
    return view('contactanos');
})->name('contactanos');

/* Jefatura */

Route::get('/empresas', function () {
    return view('empresas');
})->name('empresas');
