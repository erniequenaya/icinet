<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProyecto extends Model
{
  protected $table = 'tipo_proyecto';

  protected $fillable = [
    'nombre_tipo_proyecto'
  ];
}
