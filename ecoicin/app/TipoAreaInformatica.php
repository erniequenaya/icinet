<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoAreaInformatica extends Model
{
  protected $table = 'tipo_area_informatica';

  protected $fillable = [
    'nombre_tipo_area_informatica'
  ];

  public function solicitudes(){
    return $this->hasMany(Solicitud::class, 'tipo_area_informatica_id', 'id_tipo_area_informatica');
  }
}
