<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
  protected $table = 'empresa';

  protected $fillable = [
    'rut_empresa', 'nombre_empresa', 'telefono', 'email', 'rubro_id'
  ];
}
