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

Route::get('/graficosencuestas', function () {
    return view('graficosencuestas');
})->name('graficosencuestas');

Route::get('/prueba_doc', function(){
  $ruta_informe_anterior = App\Documento::where('nombre_documento', 'like', '%informe%')->get()->where('proyecto_id', 1)->first()->ruta_documento;
  if (Storage::exists($ruta_informe_anterior)) {
      $var = Storage::delete($ruta_informe_anterior);
  }
  return $var;
});
Route::get('/consentimiento', function () {
  return view('consentimiento');
})->name('consentimiento');

Route::get('/resultado_encuesta', function () {
  return view('resultado_encuesta');
})->name('resultado_encuesta');

Route::post('/encuesta/procesar', 'EncuestaController@procesar')->name('procesar');

//Route::get('/trabajamos_para_usted', 'SeccionEmpresaController@create')->name('trabajamos_para_usted');  DESHABILITADA TEMPORALMENTE
//Route::post('/ingresar_solicitud', 'SeccionEmpresaController@store')->name('ingresar_solicitud');
//Route::get('/empresa/{rut_empresa}', 'SeccionEmpresaController@comprobarEmpresa');
//Route::get('/consultar_solicitud/{codigo_seguimiento}', 'SeccionEmpresaController@consultarSolicitud');

Route::get('/ver_documento/{documento}', 'RepositorioController@verDocumento');

Route::post('mensajes', function(){
$data = request()->all();
    Mail::send('emails.mensaje', $data, function($message) use ($data){
      $message->from($data['email'], $data['nombre'])
      ->to('ecoicintest@gmail.com','Gonzalo');
      //->subject($data['Subject']);
    });

    return back();
    //return request()->all();
})->name('mensajes');

Route::get('/encuesta', 'EncuestaController@index')->name('encuesta');

Route::get('/contactanos', function () {
  return view('contactanos');
})->name('contactanos');

Route::get('/repositorio/producto', 'RepositorioController@producto')->name('producto.index');
Route::get('/repositorio/documento', 'RepositorioController@documento')->name('documento.index');

Route::post('/login', 'Auth\LoginController@login')->name('login');

// Usuarios Registrados
Route::group(['middleware' => 'auth'], function(){

  Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
  Route::get('/descargar_documento/{documento}', 'RepositorioController@descargarDocumento');
  //Route::get('/encuestas', 'SeccionEncuestasController@index')->name('encuestas'); DESHABILITADA TEMPORALMENTE
  //Route::get('/encuesta/responder/{encuesta}', 'SeccionEncuestasController@show'); DESHABILITADA TEMPORALMENTE
});

/* Jefatura */
Route::group(['middleware' => 'jefatura'], function(){
  //Route::get('/empresas', 'SeccionEmpresaController@listarSolicitudes')->name('empresas'); DESHABILITADA TEMPORALMENTE
  //Route::get('/solicitud/{id}', 'SeccionEmpresaController@obtenerSolicitud'); DESHABILITADA TEMPORALMENTE
  //Route::post('/solicitud/completar', 'SeccionEmpresaController@completarSolicitud')->name('empresas.completar'); DESHABILITADA TEMPORALMENTE
  //Route::post('/solicitud/responder', 'SeccionEmpresaController@responderSolicitud')->name('empresas.responder');DESHABILITADA TEMPORALMENTE
  //Route::get('/empresas/grafico/{item}', 'SeccionEmpresaController@grafico');  DESHABILITADA TEMPORALMENTE

  //Route::get('/encuesta/{encuesta}', 'SeccionEncuestasController@edit');  DESHABILITADA TEMPORALMENTE
  //Route::post('/encuesta/crear', 'SeccionEncuestasController@store')->name('encuestas.crear');  DESHABILITADA TEMPORALMENTE
  //Route::post('/encuesta/modificar', 'SeccionEncuestasController@update')->name('encuestas.modificar');  DESHABILITADA TEMPORALMENTE
  //Route::post('/encuesta/eliminar', 'SeccionEncuestasController@delete')->name('encuestas.eliminar');  DESHABILITADA TEMPORALMENTE

  Route::get('/proyectos', 'RepositorioController@listarProyectos')->name('proyectos');
  Route::post('/repositorio/nuevo_proyecto', 'RepositorioController@store')->name('repositorio.store');
  Route::get('/repositorio/{proyecto}', 'RepositorioController@edit');
  Route::post('/repositorio/modificar_proyecto', 'RepositorioController@update')->name('repositorio.update');
  Route::post('/repositorio/eliminar_proyecto', 'RepositorioController@destroy')->name('repositorio.destroy');
  //post para guardar cambios en el contenido (texto) del sitio
  Route::get('/ckeditor/guardar', 'AdministracionController@ckeditorGuardar')->name('ckeditor/guardar');

});

/* Administrador */
Route::group(['middleware' => 'admin'], function(){
  Route::get('/administracion', 'AdministracionController@index')->name('administracion');

  Route::post('/ingresar/area', 'AdministracionController@ingresar_tipo_area')->name('ingresar_tipo_area');
  Route::post('/ingresar/tipo_proyecto', 'AdministracionController@ingresar_tipo_proyecto')->name('ingresar_tipo_proyecto');

  Route::get('/usuario/{usuario}', 'AdministracionController@obtenerUsuario');
  Route::get('/cargar/usuarios', 'AdministracionController@cargar_usuarios')->name('cargar.usuario');
  Route::post('/ingresar/usuario', 'AdministracionController@ingresar_usuario')->name('ingresar_usuario');
  Route::post('/modificar/usuario', 'AdministracionController@modificar_usuario')->name('modificar.usuario');
  Route::post('/eliminar/usuario', 'AdministracionController@eliminar_usuario')->name('eliminar.usuario');
});
