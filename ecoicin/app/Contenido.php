<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    protected $table = "contenido";
    //
    protected $fillable = ['cont_secc','cont_con'];
}
