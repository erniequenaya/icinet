<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
          $table->increments('id_usuario');
          $table->string('rut_usuario', 10)->unique();
          $table->string('nombre_usuario', 45);
          $table->string('apellido_usuario', 45);
          $table->string('email_usuario')->unique();
          $table->string('clave');
          $table->unsignedInteger('tipo_usuario_id');
          $table->rememberToken();
          $table->timestamps();
          $table->foreign('tipo_usuario_id')->references('id_tipo_usuario')->on('tipo_usuario')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
