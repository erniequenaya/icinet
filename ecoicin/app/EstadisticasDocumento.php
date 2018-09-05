<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadisticasDocumento extends Model
{
  protected $table = 'estadisticas_documento';

  protected $fillable = [
    'num_visitas', 'num_descargas', 'documento_id'
  ];
}
