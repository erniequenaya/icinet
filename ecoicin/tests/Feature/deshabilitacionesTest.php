<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class deshabilitacionesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testEncuestasDeshabilitadas()
    {
        $response=$this->get('/encuestas');
        $response->assertStatus(404);
    }
    public function testEmpresasDeshabilitadas()
    {
        $response=$this->get('/trabajamos_para_usted');
        $response->assertStatus(404);
    }
}
