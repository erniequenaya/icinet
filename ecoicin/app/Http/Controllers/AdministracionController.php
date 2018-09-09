<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoUsuario;
use App\TipoAreaInformatica;
use App\TipoProyecto;
use App\User;


class AdministracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        $tipo_proyecto = TipoProyecto::all();
        $tipo_area_informatica = TipoAreaInformatica::all();
        $tipo_usuario = TipoUsuario::all();

        return view('administracion', compact('usuarios', 'tipo_proyecto', 'tipo_area_informatica', 'tipo_usuario'));
    }


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


    public function ingresar_tipo_area(Request $request)
    {
        $tipo_area = new TipoAreaInformatica;
        $tipo_area->nombre_tipo_area_informatica = $request->nombre_area;
        $rs_tipo_area = $tipo_area->save();

        if($rs_tipo_area){
          return back()->with('mensaje', 'exito');
        }
    }

    public function ingresar_tipo_proyecto(Request $request)
    {
        $tipo_proyecto = new TipoProyecto;
        $tipo_proyecto->nombre_tipo_proyecto = $request->nombre_tipo_proyecto;
        $rs_tipo_proyecto = $tipo_proyecto->save();

        if($rs_tipo_proyecto){
          return back()->with('mensaje','exito');
        }
    }

    public function modificar_usuario(){
      $usuario = $request->id_usuario;
      $rut_usuario = $request->rut_usuario;
      $password = bcrypt($request->password);
      $nombre_usuario = $request->nombre_usuario;
      $apellido_usuario = $request->apellido_usuario;
      $email_usuario = $request->email_usuario;
      $tipo_usuario_id = $request->tipo_usuario;
      $parm_usuario = compact('rut_usuario','password','nombre_usuario','apellido_usuario','email_usuario','tipo_usuario_id');
      $rs = User::where('id_usuario', $usuario)->update($parm_usuario);
      if ($rs) {
        return back();
      }
    }

    public function modificar_tipo_area(){
      $id_tipo_area_informatica = $request->id_tipo_area;
      $nombre_tipo_area_informatica = $request->nombre_area;
      $parm_tipo_area_informatica = compact('nombre_tipo_area_informatica');
      $rs = TipoAreaInformatica::where('id_tipo_area_informatica', $id_tipo_area_informatica)->update($parm_tipo_area_informatica);
      if($rs){
        return back();
      }
    }

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
