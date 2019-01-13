<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
          $table->increments('id_respuesta');
          $table->unsignedInteger('encuesta_id');
          $table->unsignedInteger('pregunta_id');
          $table->string('alternativa');
          $table->foreign('encuesta_id')->references('id_encuesta')->on('encuestas')->onDelete('cascade');
          $table->foreign('pregunta_id')->references('id_pregunta')->on('preguntas')->onDelete('cascade');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
}
