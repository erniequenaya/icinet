<?php

use Illuminate\Database\Seeder;

class TipoProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $tipos = [
        'Tesis',
        'Memoria',
        'Proyecto'
      ];

      foreach ($tipos as $tipo) {
        DB::table('tipo_proyecto')->insert([
            'nombre_tipo_proyecto' => $tipo
        ]);
      }
    }
}
