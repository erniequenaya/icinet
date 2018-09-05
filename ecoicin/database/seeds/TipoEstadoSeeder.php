<?php

use Illuminate\Database\Seeder;

class TipoEstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $estados = [
        'Rechazada',
        'Validada',
        'Realizada',
        'En ejecucion',
        'Pendiente'
      ];

      foreach ($estados as $estado) {
        DB::table('tipo_estado')->insert([
            'nombre_tipo_estado' => $estado
        ]);
      }
    }
}
