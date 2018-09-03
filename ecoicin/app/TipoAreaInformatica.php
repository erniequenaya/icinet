<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoAreaInformatica extends Model
{
  protected $table = 'tipo_area_informatica';

  protected $fillable = [
    'nombre_tipo_area_informatica'
  ];
}
