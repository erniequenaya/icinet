<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;
use App\Empresa;

class SeccionEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {

          $empresa = new Empresa;
          $empresa->rut_empresa = $request->rut_empresa;
          $empresa->nombre_empresa = $request->nombre_empresa;
          $empresa->telefono_empresa = $request->telefono_empresa;
          $empresa->email_empresa = $request->email_empresa;
          $empresa->rubro_id = $request->rubro_empresa;
          $rs_empresa = $empresa->save();

          if($rs_empresa){
            $solicitud = new Solicitud;
            $solicitud->empresa_id = $empresa->id;
            $solicitud->descripcion_solicitud = $request->descripcion_solicitud;
            $solicitud->tipo_estado_id = 1;
            $rs_solicitud = $solicitud->save();
          }

          if ($rs_empresa && $rs_solicitud) {
            return 'Su solicitud ha sido ingresada con exito!';
          }
          return 'Ha ocurrido un error al ingresar su solicitud';
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
