<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'rut_usuario' => '1111',
            'nombre_usuario' => 'Administrador',
            'apellido_usuario' => 'ICIN',
            'email_usuario' => 'administrador@icin.uta.cl',
            'password' => bcrypt('admin'),
            'tipo_usuario_id' => 1
        ]);

        DB::table('users')->insert([
            'rut_usuario' => '2222',
            'nombre_usuario' => 'Jefatura',
            'apellido_usuario' => 'ICIN',
            'email_usuario' => 'jefatura@icin.uta.cl',
            'password' => bcrypt('jefatura'),
            'tipo_usuario_id' => 2
        ]);

    }
}
