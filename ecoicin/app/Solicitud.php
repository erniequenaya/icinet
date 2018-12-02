<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Solicitud extends Model
{
  protected $table = 'solicitud';

  protected $fillable = [
    'empresa_id', 'descripcion_solicitud', 'tipo_area_informatica_id', 'tipo_estado_id', 'tipo_proyecto_id', 'razon_estado', 'codigo_seguimiento'
  ];

  /**
   * Obtiene el tipo de estado que corresponde la solicitud
   * @return TipoEstado de la solicitud
   */
  public function estado(){
    return $this->belongsTo(TipoEstado::class, 'tipo_estado_id', 'id_tipo_estado');
  }

  /**
   * Obtiene la empresa a la cual pertenece la solicitud
   * @return Empresa de la solicitud
   */
  public function empresa(){
    return $this->belongsTo(Empresa::class, 'empresa_id', 'id_empresa');
  }

  /**
   * Obtiene el tipo de area de a la cual corresponde la solicitud
   * @return TipoAreaInformatica de la solicitud
   */
  public function tipo_area(){
    return $this->belongsTo(TipoAreaInformatica::class, 'tipo_area_informatica_id', 'id_tipo_area_informatica');
  }

  /**
   * Obtiene el tipo de proyecto que corresponde la solicitud
   * @return TipoProyecto de la solicitud
   */
  public function tipo_proyecto(){
    return $this->belongsTo(TipoProyecto::class, 'tipo_proyecto_id', 'id_tipo_proyecto');
  }


}
