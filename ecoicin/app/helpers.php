<?php

  function saludarUsuario(){
    if (auth()->check()) {
      return 'Hola '. auth()->user()->nombre_usuario.'!';
    }

    return 'Hola visitante!';
  }

  function tipoUsuario(){
    if (auth()->check()) {
      return auth()->user()->tipo_usuario_id;
    }
    return false;
  }

?>
