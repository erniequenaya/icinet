<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
  protected $table = 'solicitud';

  protected $fillable = [
    'empresa_id', 'descripcion_solicitud', 'tipo_area_informatica_id', 'tipo_estado_id', 'tipo_proyecto_id', 'razon_estado', 'codigo_seguimiento'
  ];
}
