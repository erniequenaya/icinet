<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
  protected $table = 'calendario';

  protected $fillable = [
    'link_calendario', 'visible'
  ];
}
