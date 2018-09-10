<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Solicitud;

class Rubro extends Model
{
  protected $table = 'rubro';

  protected $fillable = [
    'nombre_rubro'
  ];

  public function empresas(){
    return $this->hasMany(Empresa::class, 'rubro_id', 'id_rubro');
  }
}
