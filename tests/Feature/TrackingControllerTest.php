<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TrackingControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testTrackShipmentWithValidNumber()
    {

        $validTrackingNumber = 'TR8645198217';
        // Simulate a GET request
        $responseGet = $this->get('/tracking/track-shipment', [
            'tracking_number' => $validTrackingNumber,
        ]);

        // Assert the response from the GET request
        $responseGet->assertStatus(200)
            ->assertViewIs('web.tracking.details')
            ->assertSee('Shipment details retrieved!');

        // Simulate a POST request
        $responsePost = $this->post('/tracking/track-shipment', [
            'tracking_number' => $validTrackingNumber,
        ]);

        // Assert the response from the POST request
        $responsePost->assertStatus(200)
            ->assertViewIs('web.tracking.details')
            ->assertSee('Shipment details retrieved!');
    }
}
