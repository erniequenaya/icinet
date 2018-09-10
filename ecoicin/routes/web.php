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
  $proyecto = App\Proyecto::all()->last();
    return view('index', compact('proyecto'));
})->name('index');

Route::get('/quienes_somos', function () {
    return view('quienes_somos');
})->name('quienes_somos');

Route::get('/trabajamos_para_usted', 'SeccionEmpresaController@create')->name('trabajamos_para_usted');
Route::post('/ingresar_solicitud', 'SeccionEmpresaController@store')->name('ingresar_solicitud');
Route::get('/empresa/{rut_empresa}', 'SeccionEmpresaController@comprobarEmpresa');
Route::get('/consultar_solicitud/{codigo_seguimiento}', 'SeccionEmpresaController@consultarSolicitud');

Route::get('/ver_documento/{documento}', 'RepositorioController@verDocumento');

Route::get('/contactanos', function () {
  return view('contactanos');
})->name('contactanos');

Route::get('/repositorio', 'RepositorioController@index')->name('repositorio.index');

Route::post('/login', 'Auth\LoginController@login')->name('login');

// Usuarios Registrados

Route::group(['middleware' => 'auth'], function(){

  Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
  Route::get('/descargar_documento/{documento}', 'RepositorioController@descargarDocumento');
  Route::get('/encuestas', 'SeccionEncuestasController@index')->name('encuestas');
  Route::get('/encuesta/responder/{encuesta}', 'SeccionEncuestasController@show');

});

//ruta


/* Jefatura */

Route::group(['middleware' => 'jefatura'], function(){

  Route::get('/empresas', 'SeccionEmpresaController@listarSolicitudes')->name('empresas');
  Route::get('/solicitud/{id}', 'SeccionEmpresaController@obtenerSolicitud');
  Route::post('/solicitud/completar', 'SeccionEmpresaController@completarSolicitud')->name('empresas.completar');
  Route::post('/solicitud/responder', 'SeccionEmpresaController@responderSolicitud')->name('empresas.responder');
  Route::get('/empresas/grafico/{item}', 'SeccionEmpresaController@grafico');

  Route::get('/encuesta/{encuesta}', 'SeccionEncuestasController@edit');
  Route::post('/encuesta/crear', 'SeccionEncuestasController@store')->name('encuestas.crear');
  Route::post('/encuesta/modificar', 'SeccionEncuestasController@update')->name('encuestas.modificar');
  Route::post('/encuesta/eliminar', 'SeccionEncuestasController@delete')->name('encuestas.eliminar');

  Route::get('/proyectos', 'RepositorioController@listarProyectos')->name('proyectos');
  Route::post('/repositorio/nuevo_proyecto', 'RepositorioController@store')->name('repositorio.store');
  Route::get('/repositorio/{proyecto}', 'RepositorioController@edit');
  Route::post('/repositorio/modificar_proyecto', 'RepositorioController@update')->name('repositorio.update');

});


/* Administrador */

Route::group(['middleware' => 'admin'], function(){

  Route::get('/administracion', 'AdministracionController@index')->name('administracion');

  Route::post('/ingresar/usuario', 'AdministracionController@ingresar_usuario')->name('ingresar_usuario');
  Route::post('/ingresar/area', 'AdministracionController@ingresar_tipo_area')->name('ingresar_tipo_area');
  Route::post('/ingresar/tipo_proyecto', 'AdministracionController@ingresar_tipo_proyecto')->name('ingresar_tipo_proyecto');

  Route::get('/usuario/{usuario}', 'AdministracionController@obtenerUsuario');

  Route::post('/modificar/usuario', 'AdministracionController@modificar_usuario')->name('modificar.usuario');

});
