<?php

namespace Tests\Feature;

use App\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_store_the_client_data()
    {
        $client = factory(Client::class)->create();

        $response = $this->post('/clients', $client->toArray());

        $this->assertDatabaseHas('clients', $client->toArray());
        $this->assertEquals(1, Client::count());
    }
}
