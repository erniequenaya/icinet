<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class autheticationTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function visitanteVerEncuestas()
    {
        $response=$this->get('/encuestas');
        $response->assertStatus(404);
    }
    public function visitanteResponderEncuestas()
    {
        $response=$this->get('/encuesta/responder');
        $response->assertStatus(404);
    }
    public function visitanteVerEmpresas()
    {
        $response=$this->get('/empresas');
        $response->assertStatus(404);
    }
    public function visitanteVerAdministracion()
    {
        $response=$this->get('/administracion');
        $response->assertStatus(404);
    }
    public function visitanteIngresarDatos()
    {
        $response=$this->get('/ingresar');
        $response->assertStatus(404);
    }
}
