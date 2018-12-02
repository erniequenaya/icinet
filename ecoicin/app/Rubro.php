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

  /**
   * Obtiene una coleccion de empresas que pertenezcan al rubro
   * @return Empresa[] del rubro 
   */
  public function empresas(){
    return $this->hasMany(Empresa::class, 'rubro_id', 'id_rubro');
  }
}
