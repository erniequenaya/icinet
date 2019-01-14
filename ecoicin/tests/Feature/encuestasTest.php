<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class encuestasTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testVerConsentimiento()
    {
        $response=$this->get('/consentimiento');
        $response->assertStatus(200);
        $texto="Acepto los terminos y condiciones de uso.";
        $response->assertSeeText($texto);
    }
    public function testVerEncuesta()
    {
        $response=$this->get('/encuesta');
        $texto="Entiendo algo mejor después de que yo";
        $response->assertStatus(200);
        $response->assertSeeText($texto);
        $textoIng="I understand something better after I";
        $response->assertSeeText($textoIng);
    }
}
