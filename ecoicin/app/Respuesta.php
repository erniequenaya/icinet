<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $table = 'respuestas';

    protected $fillable = [
      'encuesta_id', 'pregunta_id', 'alternativa'
    ];
}
