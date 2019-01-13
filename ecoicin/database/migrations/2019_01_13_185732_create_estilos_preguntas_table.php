<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstilosPreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estilos_preguntas', function (Blueprint $table) {
            $table->increments('id_estilo_pregunta');
            $table->unsignedInteger('estilo_id');
            $table->unsignedInteger('pregunta_id');
            $table->string('alternativa', 1);
            $table->foreign('estilo_id')->references('id_estilo')->on('estilos')->onDelete('cascade');
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
        Schema::dropIfExists('estilos_preguntas');
    }
}
