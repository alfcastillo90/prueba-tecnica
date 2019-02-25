<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DetalleComprasTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testGetDetalleCompras()
    {
        $response = $this->get("/api/detalle_compras");
        $response->assertStatus(200);
    }

    public function testGetTotalesDetallesCompras()
    {
        $response = $this->get("/api/detalle_compras/totalescompras");
        $response->assertStatus(200);
    }
}
