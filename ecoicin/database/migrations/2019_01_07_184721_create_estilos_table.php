<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstilosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estilos', function (Blueprint $table) {
            $table->increments('id_estilo');
            $table->unsignedInteger('num_pregunta');
            $table->unsignedInteger('alternativa');
            $table->string('tipo_estilo');
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
        Schema::dropIfExists('estilos');
    }
}
