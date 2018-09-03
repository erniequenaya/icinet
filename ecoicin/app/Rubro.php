<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
  protected $table = 'rubro';

  protected $fillable = [
    'nombre_rubro'
  ];
}
