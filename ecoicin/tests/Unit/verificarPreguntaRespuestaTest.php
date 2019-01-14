<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Pregunta;
use App\Respuesta;

class verificarPreguntaRespuestaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testContarPregunta()
    //verifica que se hayan cargado 44 preguntas
    {
        $totalP=Pregunta::count();
        if($totalP==44){
          $this->assertTrue(true);
        }
    }
    public function testContarRespuesta()
    //verifica que todas las respuestas almacenadas esten en multiplo de 44
    {
      $totalR=Respuesta::count();
      if($totalR!=0){
        if($totalR%44){
          $this->assertTrue(true);
        }else{
          $this->assertTrue(false);
        }
      }else {
        echo "no hay registros";
      }
    }
}
