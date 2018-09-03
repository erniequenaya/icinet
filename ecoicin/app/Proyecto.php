<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
  protected $table = 'proyecto';

  protected $fillable = [
    'nombre_proyecto', 'tipo_proyecto_id'
  ];
}
