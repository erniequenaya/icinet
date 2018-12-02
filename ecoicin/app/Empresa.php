<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
  protected $table = 'empresa';

  protected $fillable = [
    'rut_empresa', 'nombre_empresa', 'telefono', 'email', 'rubro_id'
  ];

  /**
   * Obtiene el rubro al cual pertenece la empresa
   * @return Rubro de la empresa
   */
  public function rubro(){
    return $this->belongsTo(Rubro::class, 'rubro_id', 'id_rubro');
  }
}
