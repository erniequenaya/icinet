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

  public function informe(){
    $informe = Documento::where('nombre_documento', 'like', '%informe%')->get()->where('proyecto_id', $this->id_proyecto)->first();
    return $informe->id_documento;
  }

  public function presentacion(){
    $presentacion = Documento::where('nombre_documento', 'like', '%presentacion%')->get()->where('proyecto_id', $this->id_proyecto)->first();
    return $presentacion->id_documento;
  }

  

}
