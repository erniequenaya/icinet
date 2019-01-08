<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pregunta;

class EncuestaController extends Controller
{
    //
    //
    public function index()
    {
        $preguntas = Pregunta::all();
        $idioma = 2;

        return view('encuesta', compact('preguntas', 'idioma'));
    }
}
