<?php

use Illuminate\Database\Seeder;

class EstilosPreguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $alts = ['a', 'b'];
        $est = 1;
        for ($preg=1; $preg < 45; $preg++) {
          foreach ($alts as $alt) {
            DB::table('estilos_preguntas')->insert([
              'pregunta_id' => $preg,
              'alternativa' => $alt,
              'estilo_id' => $est
            ]);
            if ($est < 8) {
              $est++;
            } else {
              $est = 1;
            }
          }
        }
    }
}
