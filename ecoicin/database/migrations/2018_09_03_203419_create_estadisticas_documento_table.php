<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadisticasDocumentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadisticas_documento', function (Blueprint $table) {
            $table->increments('id_estadisticas_documento');
            $table->integer('num_visitas');
            $table->integer('num_descargas');
            $table->unsignedInteger('documento_id');
            $table->timestamps();
            $table->foreign('documento_id')->references('id_documento')->on('documento')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadisticas_documento');
    }
}
