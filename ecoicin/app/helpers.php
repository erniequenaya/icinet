<?php

  function saludarUsuario(){
    if (auth()->check()) {
      return 'Hola '. auth()->user()->nombre_usuario.'!';
    }

    return 'Hola visitante!';
  }

?>
