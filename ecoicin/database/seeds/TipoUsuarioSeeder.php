<?php

use Illuminate\Database\Seeder;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $tipos = [
        'Administrador',
        'Jefatura',
        //'Alumno'
      ];

      foreach ($tipos as $tipo) {
        DB::table('tipo_usuario')->insert([
            'nombre_tipo_usuario' => $tipo
        ]);
      }
    }
}
