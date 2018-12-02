<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\TipoUsuario;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rut_usuario', 'nombre_usuario', 'apellido_usuario', 'email_usuario', 'password', 'tipo_usuario_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Obtiene los datos del tipo que corresponde el usuario por medio de la funcion belongsTo
     * @return TipoUsuario al cual pertenece el usuario
     */
    public function tipo_usuario(){
      return $this->belongsTo(TipoUsuario::class, 'tipo_usuario_id', 'id_tipo_usuario');
    }
}
