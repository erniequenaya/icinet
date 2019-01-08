<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pregunta;

class Pregunta extends Model
{
    protected $table = 'preguntas';

    protected $fillable = [
      'id_pregunta', 'enun_esp', 'enun_ing', 'alt_a_esp', 'alt_a_ing', 'alt_b_esp', 'alt_b_ing'
    ];
}
