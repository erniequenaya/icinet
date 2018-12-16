<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoUsuario;
use App\TipoAreaInformatica;
use App\TipoProyecto;
use App\User;
use App\Contenido;


class AdministracionController extends Controller
{
    /**
     * Pagina de administracion que utiliza datos de usuarios, tipos de proyectos, tipos de areas informaticas y tipos de usuarios
     * @return view [vista de administracion utilizando los datos mencionados anteriormente]
     */
    public function index()
    {
        $usuarios = User::all();
        $tipo_proyecto = TipoProyecto::all();
        $tipo_usuario = TipoUsuario::all();

        return view('administracion', compact('usuarios', 'tipo_proyecto', 'tipo_usuario'));
    }

    /**
     * Se registra los usuarios con los datos ingresados por formulario
     * @param  Request $request [Contiene rut, password, nombre, apellido, email y tipo de usuario]
     * @return boolean           [vista anterior]
     */
    public function ingresar_usuario(Request $request)
    {
        $usuario = new User;
        $usuario->rut_usuario = $request->rut_usuario;
        $usuario->password = bcrypt($request->password);
        $usuario->nombre_usuario = $request->nombre_usuario;
        $usuario->apellido_usuario = $request->apellido_usuario;
        $usuario->email_usuario = $request->email_usuario;
        $usuario->tipo_usuario_id = $request->tipo_usuario;
        $rs_usuario = $usuario->save();

        if($rs_usuario){
          return back()->with('mensaje', 'exito');
        }
    }

    /**
     * Se registran los tipos de areas informaticas ingresadas por formulario
     * @param  Request $request [contiene los datos ingresados]
     * @return back           [vista anterior]
     */
    /*public function ingresar_tipo_area(Request $request)
    {
        $tipo_area = new TipoAreaInformatica;
        $tipo_area->nombre_tipo_area_informatica = $request->nombre_area;
        $rs_tipo_area = $tipo_area->save();

        if($rs_tipo_area){
          return back()->with('mensaje', 'exito');
        }
    }*/

    /**
     * Se regsitran los tipos de proyectos utilizados en repositorio
     * @param  Request $request [Contiene nombre del tipo de proyecto]
     * @return back           [vista anterior]
     */
    public function ingresar_tipo_proyecto(Request $request)
    {
        $tipo_proyecto = new TipoProyecto;
        $tipo_proyecto->nombre_tipo_proyecto = $request->nombre_tipo_proyecto;
        $rs_tipo_proyecto = $tipo_proyecto->save();

        if($rs_tipo_proyecto){
          return back()->with('mensaje','exito');
        }
    }

    /**
     * Se obtiene los datos del usuario en especifico por id
     * @param  int $usuario [id del usuario a obtener]
     * @return User          [usuario consultado]
     */
    public function obtenerUsuario($usuario)
    {
      $usuario = User::where('id', $usuario)->first();

      return $usuario;
    }

    /**
     * [modificar_usuario description]
     * @param  Request $request [Contiene id, rut, nombre, apellido, password, email y tipo de usuario]
     * @return back           [vista anterior]
     */

    public function modificar_usuario(Request $request){
      $usuario = $request->id_usuario;
      $rut_usuario = $request->rut_usuario;
      $password = bcrypt($request->password);
      $nombre_usuario = $request->nombre_usuario;
      $apellido_usuario = $request->apellido_usuario;
      $email_usuario = $request->email_usuario;
      $tipo_usuario_id = $request->tipo_usuario;
      $parm_usuario = compact('rut_usuario','password','nombre_usuario','apellido_usuario','email_usuario','tipo_usuario_id');
      $rs = User::where('id', $usuario)->update($parm_usuario);
      if ($rs) {
        return back();
      }
    }

    /*public function modificar_tipo_area(){
      $id_tipo_area_informatica = $request->id_tipo_area;
      $nombre_tipo_area_informatica = $request->nombre_area;
      $parm_tipo_area_informatica = compact('nombre_tipo_area_informatica');
      $rs = TipoAreaInformatica::where('id_tipo_area_informatica', $id_tipo_area_informatica)->update($parm_tipo_area_informatica);
      if($rs){
        return back();
      }
    }*/

    public function modificar_tipo_proyecto(){
      $id_tipo_proyecto = $request->id_tipo_solicitud;
      $nombre_tipo_proyecto = $request->nombre_tipo_solicitud;
      $parm_tipo_proyecto = compact('nombre_tipo_proyecto');
      $rs = TipoProyecto::where('id_tipo_proyecto',$id_tipo_proyecto)->update($parm_tipo_proyecto);
      if($rs){
        return back();
      }
    }

    /**
     * Elimina usuario seleccionado del sistema
     * @param  Request $request [Contiene id del usuario a eliminar]
     * @return boolean           [estado de la funcion]
     */

    public function eliminar_usuario(Request $request){
      $usuario = $request->id_usuario;
      $rs = User::where('id', $usuario)->delete();

      return $rs;
    }

    /*public function eliminar_tipo_area(Request $request){
      $tipo_area = $request->id_tipo_area;
      $rs = TipoAreaInformatica::where('id_tipo_area_informatica', $tipo_area)->delete();

      return $rs;
    }*/

    public function eliminar_tipo_proyecto(Request $request){
      $tipo_proyecto = $request->id_tipo_proyecto;
      $rs = TipoProyecto::where('id_tipo_proyecto', $tipo_proyecto)->delete();

      return $rs;
    }

    public function cargar_usuarios(){
      $usuarios = User::all();

      return view('tablas.tabla_usuarios', compact('usuarios'));
    }

    
    public function ckeditorGuardar(Request $request){
        $todo=request()->all;
        $cont_con=request()->subtitulo;
        $cont_secc=key($todo);
        $compactando=compact('cont_secc','cont_con');
        echo $cont_secc;
        echo $cont_con;
        var_dump($compactando);
        echo "aaa";
        $rs=Contenido::where('cont_secc',$cont_secc)->update($compactando);
        var_dump($rs);
        if($rs){
            echo  "no hay registro con esta id";
        }else{
            echo "insertate porfa";
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
