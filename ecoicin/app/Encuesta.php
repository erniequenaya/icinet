<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
  protected $table = 'encuestas';

  protected $fillable = [
    'nombre', 'apellido', 'rut', 'email', 'genero'
  ];

  public $cont_a = 0;
  
  public $cont_b = 0;
}
