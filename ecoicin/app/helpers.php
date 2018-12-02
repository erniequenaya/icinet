<?php

  /**
   * Envia un saludo al usuario que se encuentre en la sesion, en caso de no estar
   * logeado un usuario, saluda al visitante
   * @return String con mensaje de bienvenida
   */
  function saludarUsuario(){
    if (auth()->check()) {
      return 'Hola '. auth()->user()->nombre_usuario.'!';
    }

    return 'Hola visitante!';
  }

  /**
   * Obtiene el id del tipo de usuario en la sesion, en el caso de que no se encuentre
   * usuario logeado, retorna un false
   * @return Int/Boolean segun corresponda
   */
  function tipoUsuario(){
    if (auth()->check()) {
      return auth()->user()->tipo_usuario_id;
    }
    return false;
  }

?>
