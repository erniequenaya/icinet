<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\Documento;
use App\EstadisticasDocumento;
use App\TipoProyecto;
use Storage;

class RepositorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        $tipo_proyecto = TipoProyecto::all();
        $cont = 2;

        return view('repositorio', compact('proyectos', 'tipo_proyecto', 'cont'));
    }

    public function listarProyectos(){
      $proyectos = Proyecto::all();
      $tipo_proyecto = TipoProyecto::all();
      $cont = 2;

      return view('proyectos', compact('proyectos', 'tipo_proyecto', 'cont'));
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
          $proyecto = new Proyecto;
          $proyecto->nombre_proyecto = $request->nombre_proyecto;
          $proyecto->autores_proyecto = $request->autores_proyecto;
          $proyecto->tipo_proyecto_id = $request->tipo_proyecto;
          $proyecto->fecha_proyecto = $request->fecha_proyecto;
          $rs_proyecto = $proyecto->save();

          if($rs_proyecto){

            $informe = new Documento;
            $informe->nombre_documento = $proyecto->nombre_proyecto.'_informe';
            $informe->ruta_documento = $this->almacenarDocumento($request->informe_proyecto, $informe->nombre_documento, 'informe');
            $informe->proyecto_id = $proyecto->id;
            $rs_informe = $informe->save();
            $informe_id = $informe->id;

            if ($rs_informe) {
              $estadistica_informe = new EstadisticasDocumento;
              $estadistica_informe->num_visitas = 0;
              $estadistica_informe->num_descargas = 0;
              $estadistica_informe->documento_id = $informe_id;
              $rs_est_informe = $estadistica_informe->save();
            }

            $presentacion = new Documento;
            $presentacion->nombre_documento = $proyecto->nombre_proyecto.'_presentacion';
            $presentacion->ruta_documento = $this->almacenarDocumento($request->presentacion_proyecto, $presentacion->nombre_documento, 'presentacion');
            $presentacion->proyecto_id = $proyecto->id;
            $rs_presentacion = $presentacion->save();
            $presentacion_id = $presentacion->id;

            if ($rs_presentacion) {
              $estadistica_presentacion = new EstadisticasDocumento;
              $estadistica_presentacion->num_visitas = 0;
              $estadistica_presentacion->num_descargas = 0;
              $estadistica_presentacion->documento_id = $presentacion_id;
              $rs_est_presentacion = $estadistica_presentacion->save();
            }
          }

          if($rs_proyecto /*&& $rs_informe && $rs_est_informe && $rs_presentacion && $rs_est_presentacion*/){
            //dd($rs_proyecto);
            return back()->with('mensaje', 'Se ha ingresado correctamente el proyecto');
          }

          return back()->with('mensaje', 'Ha ocurrido un error al ingresar el proyecto');
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

    protected function almacenarDocumento($documento, $nombre_documento, $tipo){
      return $documento->storeAs("uploads_".$tipo, $nombre_documento.".pdf");
    }

    public function verDocumento($documento){
      $ruta_documento = Documento::where('id_documento', $documento)->first()->ruta_documento;
      return Storage::response($ruta_documento);
    }

    public function descargarDocumento($documento){
      $ruta_documento = Documento::where('id_documento', $documento)->first()->ruta_documento;
      return Storage::download($ruta_documento);
    }
}
