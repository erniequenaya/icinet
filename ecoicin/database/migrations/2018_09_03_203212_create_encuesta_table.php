<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuesta', function (Blueprint $table) {
            $table->increments('id_encuesta');
            $table->string('nombre_encuesta', 45);
            $table->string('link_encuesta', 100);
            $table->date('fecha_inicio_encuesta');
            $table->date('fecha_termino_encuesta');
            $table->boolean('visible');
            $table->boolean('solo_alumnos');
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
        Schema::dropIfExists('encuesta');
    }
}
