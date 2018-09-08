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

Route::get('/trabajamos_para_usted', 'SeccionEmpresaController@create')->name('trabajamos_para_usted');
Route::post('/ingresar_solicitud', 'SeccionEmpresaController@store')->name('ingresar_solicitud');
Route::get('/empresa/{rut_empresa}', 'SeccionEmpresaController@comprobarEmpresa');
Route::get('/consultar_solicitud/{codigo_seguimiento}', 'SeccionEmpresaController@consultarSolicitud');

Route::resource('repositorio', 'RepositorioController');
Route::get('/ver_documento/{documento}', 'RepositorioController@verDocumento');
Route::get('/descargar_documento/{documento}', 'RepositorioController@descargarDocumento');

Route::get('/contactanos', function () {
    return view('contactanos');
})->name('contactanos');

/* Jefatura */

Route::get('/empresas', function () {
    return view('empresas');
})->name('empresas');

Route::get('/graficos_solicitudes', function () {
    return view('graficos_solicitudes');
})->name('graficos_solicitudes');

Route::get('/encuestas', function () {
    return view('encuestas');
})->name('encuestas');

Route::get('/proyectos', function () {
    return view('proyectos');
})->name('proyectos');

/* Administrador */

Route::get('/administracion', function () {
    return view('administracion');
})->name('administracion');

Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
