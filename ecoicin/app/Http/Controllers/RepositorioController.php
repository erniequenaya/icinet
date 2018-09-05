<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\Documento;
use App\EstadisticasDocumento;

class RepositorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

     // NO SE HA PROBADO ESTA FUNCION DEL CONTROLADOR!!!!
    public function store(Request $request)
    {
        if ($request->ajax()) {
          $proyecto = new Proyecto;
          $proyecto->nombre_proyecto = $request->nombre_proyecto;
          $proyecto->tipo_proyecto_id = $request->tipo_proyecto;
          $proyecto->autores_proyecto = $request->autores_proyecto;
          $rs_proyecto = $proyecto->save();

          if($rs_proyecto){

            $informe = new Documento;
            $informe->nombre_documento = 'informe';
            $informe->ruta_documento = 'prueba';
            $informe->proyecto_id = $proyecto->id;
            $rs_informe = $informe->save();

            if ($rs_informe) {
              $estadistica_informe = new EstadisticasDocumento;
              $estadistica_informe->num_visitas = 0;
              $estadistica_informe->num_descargas = 0;
              $estadistica_informe->documento_id = $informe->id_documento;
              $rs_est_informe = $estadistica_informe->save();
            }

            $presentacion = new Documento;
            $presentacion->nombre_documento = 'presentacion';
            $presentacion->ruta_documento = 'prueba';
            $presentacion->proyecto_id = $proyecto->id;
            $rs_presentacion = $presentacion->save();

            if ($rs_presentacion) {
              $estadistica_presentacion = new EstadisticasDocumento;
              $estadistica_presentacion->num_visitas = 0;
              $estadistica_presentacion->num_descargas = 0;
              $estadistica_presentacion->documento_id = $presentacion->id_documento;
              $rs_est_presentacion = $estadistica_presentacion->save();
            }
          }

          if($rs_proyecto && $rs_informe && $rs_est_informe && $rs_presentacion && $rs_est_presentacion){
            return 'Se ha ingresado correctamente el proyecto!';
          }

          return 'Ha ocurrido un error al ingresar el proyecto';
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
