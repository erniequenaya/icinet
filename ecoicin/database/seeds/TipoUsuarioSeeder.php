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
        'Alumno',
        'Administrador',
        'Jefatura'
      ];

      foreach ($tipos as $tipo) {
        DB::table('tipo_usuario')->insert([
            'nombre_tipo_usuario' => $tipo
        ]);
      }
    }
}
