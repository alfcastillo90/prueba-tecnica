<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ComprasTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testGetCompras()
    {
        $response = $this->get("/api/compras");
        $response->assertStatus(200);
    }

    public function testGetComprasDetallesAsociados()
    {
        $response = $this->get("/api/compras/detallesasociados");
        $response->assertStatus(200);
    }
}
