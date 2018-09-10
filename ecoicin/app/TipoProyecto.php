<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProyecto extends Model
{
  protected $table = 'tipo_proyecto';

  protected $fillable = [
    'nombre_tipo_proyecto'
  ];

  public function solicitudes(){
    return $this->hasMany(Solicitud::class, 'tipo_proyecto_id', 'id_tipo_proyecto');
  }
}
