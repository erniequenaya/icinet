<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pregunta;
use App\Respuesta;
use App\Encuesta;
use App\Estilo;
use App\EstiloPregunta;

class EncuestaController extends Controller
{
    //
    public function index()
    {
      $preguntas = Pregunta::all();
      $idioma = 2;
      return view('encuesta', compact('preguntas', 'idioma'));
    }

    public function responder(Request $request){
      dd($request->all());
      if($request->consent){
        $this->guardar($request);
      }

      $cuestionario = $this->procesar();

      return view('resultado_encuesta', compact('cuestionario'));
    }

    private function guardar(Request $request){
        //estoy en tu documento?si
        //abre tmb el encuesta de resultado, la vista
        //falta poner un if referenciando el checkbox yap Discord?
          $encuesta = new Encuesta;

          $encuesta->nombre=$request->Nombre;
          $encuesta->apellido=$request->Apellido;
          $encuesta->email=$request->Correo;
          $encuesta->genero = $request->genero;
          $encuesta->edad=$request->edad;

          $encuesta->save();

          for($i = 1; $i<=44 ; $i++){
            $alt = $request->{'resp_'.$i};
            $respuesta= new Respuesta();
            $respuesta->encuesta_id=Encuesta::all()->last()->id_encuesta;;
            $respuesta->alternativa=$alt;
            $respuesta->pregunta_id=$i;
            echo $respuesta->pregunta_id;
            echo $respuesta->alternativa;
            echo "<br>";
            //echo $respuesta::all();
            $respuesta->save();
          }
    }

    private function procesar(Request $request){
        /*if(Respuesta::count()==0){
            echo "esta vacio";
            $respuesta->encuesta_id=1;
        }else{
            $respuesta->encuesta_id=Respuesta::last()->encuesta_id+1;
        }*/


        //var_dump($request->all());
        //echo "#############################################################\n";
      $act_ref = ['num' => [1, 5, 9 , 13, 17, 21, 25, 29, 33, 37, 41], 'cont_total' => 0, 'cont_a' => 0, 'cont_b' => 0, 'dif' => 0, 'alt_mayor' => ''];
      $sns_int = ['num' => [2, 6, 10, 14, 18, 22, 26, 30, 34, 38, 42], 'cont_total' => 0, 'cont_a' => 0, 'cont_b' => 0, 'dif' => 0, 'alt_mayor' => ''];
      $vis_vrb = ['num' => [3, 7, 11, 15, 19, 23, 27, 31, 35, 39, 43], 'cont_total' => 0, 'cont_a' => 0, 'cont_b' => 0, 'dif' => 0, 'alt_mayor' => ''];
      $seq_glo = ['num' => [4, 8, 12, 16, 20, 24, 28, 32, 36, 40, 44], 'cont_total' => 0, 'cont_a' => 0, 'cont_b' => 0, 'dif' => 0, 'alt_mayor' => ''];

      $grupos = [$act_ref, $sns_int, $vis_vrb, $seq_glo];

      for($i = 1; $i<=44 ; $i++){
        $alt = $request->{'resp_'.$i};

        for ($j=0; $j < 4 ; $j++) {
          if(in_array($i, $grupos[$j]['num'])){
            $grupos[$j]['cont_total']++;
            $grupos[$j]['cont_'.$alt]++;
            echo '<br>';
            echo $i.$alt;
            echo '<br>';
          }
        }
      }
      for ($i=0; $i < 4 ; $i++) {
        $grupos[$i]['dif'] = abs($grupos[$i]['cont_a'] - $grupos[$i]['cont_b']);
        $grupos[$i]['alt_mayor'] = ($grupos[$i]['cont_a'] > $grupos[$i]['cont_b']) ? 'a' : 'b';
      }
      //var_dump($grupos);
      //echo 'Sus resultados son:'
      return $grupos;
    }

    public function procesar_nuevo(Request $request){

    }

    private function crear($preguntas){

    }

    private function clasificar($estilo){

    }
}
