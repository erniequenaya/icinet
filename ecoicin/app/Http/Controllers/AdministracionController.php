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
        //
    }

    public function ingresar_tipo_proyecto(Request $request)
    {
        //
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
