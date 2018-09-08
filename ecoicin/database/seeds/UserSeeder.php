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
            'nombre_usuario' => 'ismael',
            'apellido_usuario' => 'liberona',
            'email_usuario' => 'ismael@gmail.com',
            'password' => bcrypt('clave'),
            'tipo_usuario_id' => 1
        ]);

    }
}
