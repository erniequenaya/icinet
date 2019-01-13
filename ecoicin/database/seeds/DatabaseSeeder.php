<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TipoProyectoSeeder::class);
        $this->call(TipoUsuarioSeeder::class);
        $this->call(UserSeeder::class);
        //seeder textos en la pagina
        $this->call(ContenidoSeeder::class);
        $this->call(PreguntasSeeder::class);
        $this->call(EstilosSeeder::class);
        $this->call(EstilosPreguntasSeeder::class);
    }
}
