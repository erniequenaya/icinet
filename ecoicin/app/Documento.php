<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
  protected $table = 'documento';

  protected $fillable = [
    'nombre_documento', 'ruta_documento', 'fecha_ingreso', 'proyecto_id'
  ];
}
