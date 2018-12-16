<?php

use Illuminate\Database\Seeder;

class contenidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('contenido')->insert([
        'cont_secc'=>'subtitulo',
        'cont_con'=>'La computación y la tecnología son parte de nuestras vidas.<br> Crear soluciones en este nuevo mundo sin fronteras.'
        ]);

        DB::table('contenido')->insert([
        'cont_secc'=>'contactanos',
        'cont_con'=>'¿Necesita una solucion informatica?'
        ]);

        DB::table('contenido')->insert([
         'cont_secc'=>'descripcionCliente',
         'cont_con'=>'Jorge Diaz Ramirez <br> Jefe Carrera IECI-ICIN Universidad de Tarapacá, EUIIIS Iquique-Chile'
        ]);

    }
}
