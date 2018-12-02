<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Documento;

class Proyecto extends Model
{
  protected $table = 'proyecto';

  protected $fillable = [
    'nombre_proyecto', 'tipo_proyecto_id', 'autores_proyecto', 'fecha_proyecto'
  ];

  /**
   * Obtiene el id del informe que corresponda al id del proyecto solicitado
   * @return Int del documento
   */
  public function informe(){
    $informe = Documento::where('nombre_documento', 'like', '%informe%')->get()->where('proyecto_id', $this->id_proyecto)->first();
    return $informe->id_documento;
  }

  /**
   * Obtiene el id de la presentacion que corresponde al id del proyecto solicitado
   * @return Int del documento
   */
  public function presentacion(){
    $presentacion = Documento::where('nombre_documento', 'like', '%presentacion%')->get()->where('proyecto_id', $this->id_proyecto)->first();
    return $presentacion->id_documento;
  }

  /**
   * Obtiene el tipo de proyecto solicitado
   * @return TipoProyecto del proyecto
   */
  public function tipo(){
    return $this->belongsTo(TipoProyecto::class, 'tipo_proyecto_id', 'id_tipo_proyecto');
  }

}
