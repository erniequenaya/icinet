<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encuesta;

class SeccionEncuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encuestas = Encuesta::all();

        return view('encuestas', compact('encuestas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if ($request->fecha_termino_encuesta > $request->fecha_inicio_encuesta) {
        $encuesta = new Encuesta;
        $encuesta->nombre_encuesta = $request->nombre_encuesta;
        $encuesta->link_encuesta = $request->url_encuesta;
        $encuesta->fecha_inicio_encuesta = $request->fecha_inicio_encuesta;
        $encuesta->fecha_termino_encuesta = $request->fecha_termino_encuesta;
        $encuesta->solo_alumnos = $request->solo_alumnos ? : 0;
        $encuesta->visible = $request->visible ? : 0;
        $rs = $encuesta->save();
        if ($rs) {
          return back()->with('mensaje', 'exito');
        }
      }else {
        return back()->withInput();
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($encuesta)
    {
      $encuesta = Encuesta::where('id_encuesta', $encuesta)->first();

      return $encuesta->link_encuesta;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($encuesta)
    {
      $encuesta = Encuesta::where('id_encuesta', $encuesta)->first();

      return $encuesta;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $encuesta = $request->id_encuesta;
      $nombre_encuesta = $request->nombre_encuesta;
      $link_encuesta = $request->url_encuesta;
      $fecha_inicio_encuesta = $request->fecha_inicio_encuesta;
      $fecha_termino_encuesta = $request->fecha_termino_encuesta;
      $solo_alumnos = $request->solo_alumnos ? : 0;
      $visible = $request->visible ? : 0;
      $parm_encuesta = compact('nombre_encuesta', 'link_encuesta', 'fecha_inicio_encuesta', 'fecha_termino_encuesta', 'solo_alumnos', 'visible');
      $rs = Encuesta::where('id_encuesta', $encuesta)->update($parm_encuesta);
      if ($rs) {
        return back();
      }
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
