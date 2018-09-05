<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
  protected $table = 'encuesta';

  protected $fillable = [
    'nombre_encuesta', 'link_encuesta', 'fecha_inicio_encuesta', ' fecha_termino_encuesta', 'visible', 'tipo_usuario_id'
  ];
}
