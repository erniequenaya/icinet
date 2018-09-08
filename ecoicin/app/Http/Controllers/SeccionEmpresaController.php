<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;
use App\Empresa;
use App\Rubro;
use App\TipoEstado;

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
        $rubros = Rubro::all();

        return view('trabajamos_para_usted', compact('rubros'));
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

          if ($this->existeEmpresa($request->rut_empresa)) {
            $empresa = $this->obtenerEmpresa($request->rut_empresa);
            $empresa_id = $empresa->id_empresa;
            $rs_empresa = true;
          } else {
            $empresa = new Empresa;
            $empresa->rut_empresa = $request->rut_empresa;
            $empresa->nombre_empresa = $request->nombre_empresa;
            $empresa->telefono_empresa = $request->telefono_empresa;
            $empresa->email_empresa = $request->email_empresa;
            $empresa->rubro_id = $request->rubro_empresa;
            $rs_empresa = $empresa->save();
            $empresa_id = $empresa->id;
          }

          if($rs_empresa){
            $solicitud = new Solicitud;
            $solicitud->empresa_id = $empresa_id;
            $solicitud->descripcion_solicitud = $request->descripcion_solicitud;
            $solicitud->tipo_estado_id = 5;
            $solicitud->codigo_seguimiento = $this->generarCodigo(8);
            $rs_solicitud = $solicitud->save();
          }

          if ($rs_empresa && $rs_solicitud) {
            return "Su solicitud ha sido ingresada con exito, Su codigo de seguimiento es: ".$solicitud->codigo_seguimiento;
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

    protected function existeEmpresa($rut_empresa){
      return Empresa::where('rut_empresa', $rut_empresa)->get()->isNotEmpty();
    }

    public function obtenerEmpresa($rut_empresa){
      return Empresa::where('rut_empresa', $rut_empresa)->first();
    }

    public function comprobarEmpresa($rut_empresa){
      if ($this->existeEmpresa($rut_empresa)) {
        return $this->obtenerEmpresa($rut_empresa);
      }
      return 0;
    }

    public function consultarSolicitud($codigo){
      if(Solicitud::where('codigo_seguimiento', $codigo)->get()->isNotEmpty()){
        $solicitud = Solicitud::where('codigo_seguimiento', $codigo)->first();
        $estado = $solicitud->estado->nombre_tipo_estado;
        $razon = $solicitud->razon_estado;
        return compact('estado', 'razon');
      }
    }


    //creamos la función
    protected function generarCodigo($longitud, $tipo = 0)
    {
        //creamos la variable codigo
        $codigo = "";
        //caracteres a ser utilizados
        $caracteres="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        //el maximo de caracteres a usar
        $max=strlen($caracteres)-1;
        //creamos un for para generar el codigo aleatorio utilizando parametros min y max
        for($i=0;$i < $longitud;$i++)
        {
            $codigo.=$caracteres[rand(0,$max)];
        }
        //regresamos codigo como valor
        return $codigo;
    }


}
