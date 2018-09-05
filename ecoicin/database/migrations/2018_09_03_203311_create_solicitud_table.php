<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud', function (Blueprint $table) {
            $table->increments('id_solicitud');
            $table->unsignedInteger('empresa_id');
            $table->text('descripcion_solicitud', 255);
            $table->unsignedInteger('tipo_area_informatica_id');
            $table->unsignedInteger('tipo_proyecto_id');
            $table->unsignedInteger('tipo_estado_id');
            $table->text('razon_estado', 200);
            $table->string('codigo_seguimiento', 45);
            $table->timestamps();
            $table->foreign('empresa_id')->references('id_empresa')->on('empresa')->onDelete('cascade');
            $table->foreign('tipo_area_informatica_id')->references('id_tipo_area_informatica')->on('tipo_area_informatica')->onDelete('cascade');
            $table->foreign('tipo_proyecto_id')->references('id_tipo_proyecto')->on('tipo_proyecto')->onDelete('cascade');
            $table->foreign('tipo_estado_id')->references('id_tipo_estado')->on('tipo_estado')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud');
    }
}
