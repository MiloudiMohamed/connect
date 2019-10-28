<?php

namespace Tests\Feature;

use App\Period;
use App\Reservation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReservationsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_store_the_client_data()
    {
        $this->withoutExceptionHandling();
        $client = factory(Reservation::class)->make();

        $response = $this->post('/reservations', $client->toArray());

        $this->assertEquals(1, Reservation::count());
    }

    /** @test */
    public function it_store_the_registration_period()
    {
        $client = factory(Reservation::class)->make();

        $response = $this->post('/reservations', $client->toArray());

        $this->assertEquals(1, Period::count());
    }

    /** @test */
    public function cannot_register_when_bypassing_the_max_limit()
    {
        $client = factory(Reservation::class)->make();

        $response = $this->post('/reservations', $client->toArray());

        $this->assertEquals(1, Period::count());
    }
}
