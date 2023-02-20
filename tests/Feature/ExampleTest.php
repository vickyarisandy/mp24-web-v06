<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_HalamanUtama_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_the_TentangKami_route_returns_a_successful_response()
    {
        $response = $this->get('/tentang-kami');

        $response->assertStatus(200);
    }

    public function test_the_DaftarDokter_route_returns_a_successful_response()
    {
        $response = $this->get('/dokter');

        $response->assertStatus(200);
    }

    public function test_the_DaftarObat_route_returns_a_successful_response()
    {
        $response = $this->get('/obat');

        $response->assertStatus(200);
    }


}
