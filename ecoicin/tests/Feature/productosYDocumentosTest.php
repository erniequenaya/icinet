<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class productosYDocumentosTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function VerProducto()
    {
        $response=$this->get('/repositorio/producto');
        $response->assertStatus(200);
    }
    public function verDocumento()
    {
        $response=$this->get('/repositorio/documento');
        $response->assertStatus(200);
    }
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
