<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto', function (Blueprint $table) {
            $table->increments('id_proyecto');
            $table->string('nombre_proyecto', 45);
            $table->string('autores_proyecto', 150);
            $table->date('fecha_proyecto');
            $table->unsignedInteger('tipo_proyecto_id');
            $table->timestamps();
            $table->foreign('tipo_proyecto_id')->references('id_tipo_proyecto')->on('tipo_proyecto')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyecto');
    }
}
