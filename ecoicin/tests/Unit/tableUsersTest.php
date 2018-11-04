<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class tableUsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function testExisteAdministrador()
    {
        $this->assertDatabaseHas('users',[
            'tipo_usuario_id'=>'2',
        ]);
    }
}
