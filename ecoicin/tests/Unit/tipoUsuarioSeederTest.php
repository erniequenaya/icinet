<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class tipoUsuarioSeederTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
     //use RefreshDatabase;
    public function testTipoUsuariosCargados()
    {
        $this->assertDatabaseHas('tipo_usuario',[
            'id_tipo_usuario'=>'1',
            'id_tipo_usuario'=>'2',
            'nombre_tipo_usuario'=>'Administrador',
            'nombre_tipo_usuario'=>'Jefatura'
        ]);
    }
}
