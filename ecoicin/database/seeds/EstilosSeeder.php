<?php

use Illuminate\Database\Seeder;

class EstilosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $estilos = [
        'Activo',
        'Reflexivo',
        'Perceptivo',
        'Intuitivo',
        'Visual',
        'Verbal',
        'Secuencial',
        'Global'
      ];

      foreach ($estilos as $estilo) {
        DB::table('estilos')->insert([
          'nombre_estilo' => $estilo
        ]);
      }
    }
}
